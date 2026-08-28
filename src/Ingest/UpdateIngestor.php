<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Ingest;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUser;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserUser;
use MeRezaRezaei\TelegramClient\Schema\Generator\Naming;

/**
 * Raw TL update arrays (teleproto truth: snake keys, `_` constructor name,
 * raw flag ints) → P1 anchor/instance truth. Tenant-scoped by accountId on
 * every anchor (roadmap tenancy contract), idempotent per (account, tl_id).
 *
 * Task 1 surface: one flat constructor (user#31774388). Nested refs/vectors
 * and recursive writes arrive with the PayloadWalker (plan Tasks 2–3);
 * unknown constructors fail loudly rather than half-write.
 */
final class UpdateIngestor
{
    /**
     * Flat-constructor map: `_` name => [anchor class, instance class,
     * scheme-written constructor id]. Constructor ids are the .tl-written
     * hex (NOT runtime crc32 — scheme ids are canonical).
     *
     * @var array<string, array{0: class-string<TlAnchorModel>, 1: class-string<TlInstanceModel>, 2: int}>
     */
    private const CONSTRUCTORS = [
        'user' => [TlUser::class, TlUserUser::class, 0x31774388],
    ];

    /**
     * Root-namespace entity anchors are off the shipped dial by design
     * (P1 dial semantics: root namespace stays in the full generated set).
     * Tests and console tooling migrate them alongside the dial.
     *
     * @return list<string>
     */
    public static function entityMigrationPaths(): array
    {
        return [
            dirname(__DIR__, 2) . '/generated/migrations/2026_08_28_000403_create_tl_user_table.php',
        ];
    }

    /**
     * All migration paths the ingest surface runs: the shipped curated dial
     * (same dir the provider's loadMigrationsFrom publishes) plus the
     * off-dial entity anchors. Note `migrate --path` REPLACES registered
     * package paths, so the dial must be passed explicitly.
     *
     * @return list<string>
     */
    public static function migrationPaths(): array
    {
        return array_merge(
            [dirname(__DIR__, 2) . '/migrations'],
            self::entityMigrationPaths(),
        );
    }

    /**
     * Run the generated migrations into the (test) connection: the
     * curated dial plus the off-dial entity anchors. Idempotent
     * (Laravel migrate).
     */
    public function boot(): void
    {
        Artisan::call('migrate', [
            '--force' => true,
            '--realpath' => true,
            '--path' => self::migrationPaths(),
        ]);
    }

    /**
     * Ingest one flat constructor payload under a tenant.
     *
     * @param array<string, mixed> $payload
     */
    public function ingest(array $payload, int $accountId): TlInstanceModel
    {
        $name = (string) ($payload['_'] ?? '');
        $def = self::CONSTRUCTORS[$name] ?? null;
        if ($def === null) {
            throw new \InvalidArgumentException(
                "UpdateIngestor: no constructor mapping for '{$name}' (Task 1 surface: user)",
            );
        }

        /** @var class-string<TlAnchorModel> $anchorClass */
        [$anchorClass, $instanceClass, $ctorId] = $def;
        /** @var class-string<TlInstanceModel> $instanceClass */

        $columns = $this->columns($payload);

        return DB::transaction(function () use ($columns, $accountId, $name, $anchorClass, $instanceClass, $ctorId): TlInstanceModel {
            $anchorId = $this->existingAnchorId($instanceClass, $anchorClass, (int) $columns['tl_id'], $accountId);
            if ($anchorId === null) {
                $anchor = new $anchorClass();
                $anchor->forceFill([
                    'constructor_id' => $ctorId,
                    'constructor_name' => $name,
                    'account_id' => $accountId,
                ]);
                $anchor->save(); // TlAnchorModel::booted assigns the UUIDv7 PK

                $anchorId = (string) $anchor->getKey();
            }

            $instance = $instanceClass::query()->find($anchorId) ?? new $instanceClass();
            $instance->setAttribute('id', $anchorId); // shared PK with the anchor (spec §4.2)
            $instance->fill($columns);
            $instance->save();

            return $instance;
        });
    }

    /**
     * Payload keys are wire snake_case; column names follow the P1
     * metamodel naming (reserved words get the tl_ prefix — id → tl_id).
     * Nested arrays (refs/vectors) are skipped until the walker lands.
     *
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    private function columns(array $payload): array
    {
        $columns = [];
        foreach ($payload as $key => $value) {
            if ($key === '_' || is_array($value)) {
                continue;
            }
            $columns[Naming::column((string) $key)] = $value;
        }
        return $columns;
    }

    /**
     * Anchor for (tenant, telegram id): tl_id lives on the instance tables
     * (per-constructor), so resolve through them — no global lookups by
     * telegram id alone (roadmap tenancy contract).
     */
    private function existingAnchorId(string $instanceClass, string $anchorClass, int $tlId, int $accountId): ?string
    {
        $ids = $instanceClass::query()->where('tl_id', $tlId)->pluck('id')->all();
        if ($ids === []) {
            return null;
        }

        $anchor = $anchorClass::query()
            ->where('account_id', $accountId)
            ->whereIn('id', $ids)
            ->first();

        return $anchor?->id !== null ? (string) $anchor->id : null;
    }
}

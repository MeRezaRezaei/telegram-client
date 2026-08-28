<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Console;

use Illuminate\Console\Command;
use MeRezaRezaei\TelegramClient\Backup\BackupRunner;
use MeRezaRezaei\TelegramClient\Backup\Restorer;
use MeRezaRezaei\TelegramClient\Backup\Verifier;
use MeRezaRezaei\TelegramClient\Backup\VaultInterface;
use RuntimeException;

/**
 * artisan telegram-client:backup (plan Phase 4, Task 4): the CLI shell
 * over BackupRunner / Restorer / Verifier for one configured backup set
 * (config telegram-client.backup.sets.<set>).
 *
 * Vault transport is a container seam mirroring BackfillCommand:
 * VAULT_FACTORY_KEY binds callable(string $setId): VaultInterface. The
 * provider default honours telegram-client.backup.driver — 'memory'
 * (offline default; a per-set shared InMemoryVault, so run→restore works
 * inside one process but nothing is stored) or 'telegram', which resolves
 * a real scope through the P3 SCOPE_RESOLVER_KEY seam (the shared
 * daemon.accounts registry via AccountWorker::buildLiveScope) and builds
 * a TelegramVault over it.
 *
 * The passphrase comes from --passphrase or TELEGRAM_CLIENT_BACKUP_PASS-
 * PHRASE and is never logged or echoed.
 */
final class BackupCommand extends Command
{
    /** Container seam: callable(string $setId): VaultInterface (provider binds the driver-aware default). */
    public const VAULT_FACTORY_KEY = 'telegram-client.backup.vault-factory';

    private const ACTIONS = ['run', 'restore', 'verify', 'status'];

    protected $signature = 'telegram-client:backup
        {action : run|restore|verify|status}
        {--set=default : Backup set id (key under telegram-client.backup.sets)}
        {--passphrase= : Vault passphrase — or env TELEGRAM_CLIENT_BACKUP_PASSPHRASE (never logged)}
        {--target= : Restore target directory (restore action)}
        {--sample=5 : Chunk sample size for verify}';

    protected $description = 'Encrypted Telegram-channel backup vault: run, restore, verify or show status of a backup set';

    public function handle(): int
    {
        $action = (string) $this->argument('action');

        if (!in_array($action, self::ACTIONS, true)) {
            $this->error(sprintf('unknown action "%s" — expected run|restore|verify|status.', $action));

            return self::FAILURE;
        }

        $setId = (string) $this->option('set');

        /** @var array<string, mixed>|null $setConfig */
        $setConfig = $this->getLaravel()->make('config')->get('telegram-client.backup.sets.' . $setId);

        if (!is_array($setConfig)) {
            $this->error(sprintf('unknown backup set "%s" — configure telegram-client.backup.sets.%s.', $setId, $setId));

            return self::FAILURE;
        }

        try {
            return match ($action) {
                'run' => $this->runAction($setId, $setConfig),
                'restore' => $this->restoreAction($setId),
                'verify' => $this->verifyAction($setId),
                default => $this->statusAction($setId),
            };
        } catch (RuntimeException $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }

    /** @param array<string, mixed> $setConfig */
    private function runAction(string $setId, array $setConfig): int
    {
        $stats = BackupRunner::run(
            $setConfig + [
                'set' => $setId,
                'chunk_size' => (int) $this->getLaravel()->make('config')->get('telegram-client.backup.chunk_size', 4194304),
            ],
            $this->vault($setId),
            $this->passphrase('run'),
        );

        $this->info(sprintf(
            'backup set=%s {uploaded:%d, skipped:%d, files:%d, bytes:%d}',
            $setId,
            $stats['uploaded'],
            $stats['skipped'],
            $stats['files'],
            $stats['bytes'],
        ));

        return self::SUCCESS;
    }

    private function restoreAction(string $setId): int
    {
        $target = (string) ($this->option('target') ?? '');

        if ($target === '') {
            $this->error('restore needs --target=<directory>.');

            return self::FAILURE;
        }

        $stats = Restorer::restore($this->vault($setId), $this->passphrase('restore'), $target);

        $this->info(sprintf('restored set=%s {files:%d, bytes:%d} -> %s', $setId, $stats['files'], $stats['bytes'], $target));

        return self::SUCCESS;
    }

    private function verifyAction(string $setId): int
    {
        $vault = $this->vault($setId);
        $sample = max(1, (int) $this->option('sample'));

        $passphrase = (string) ($this->option('passphrase') ?? '');
        if ($passphrase === '') {
            $passphrase = (string) (getenv('TELEGRAM_CLIENT_BACKUP_PASSPHRASE') ?: '');
        }

        if ($passphrase !== '') {
            $result = Verifier::verifyWithKey($vault, $passphrase, $sample);
            $this->line(sprintf(
                'verify set=%s {checked:%d, ok:%d, missing:%d, corrupt:%d}',
                $setId,
                $result['checked'],
                $result['ok'],
                $result['missing'],
                $result['corrupt'],
            ));

            return $result['missing'] > 0 || $result['corrupt'] > 0 ? self::FAILURE : self::SUCCESS;
        }

        $result = Verifier::verify($vault, $sample);
        $this->line(sprintf(
            'verify set=%s {checked:%d, ok:%d, missing:%d}',
            $setId,
            $result['checked'],
            $result['ok'],
            $result['missing'],
        ));

        return $result['missing'] > 0 || $result['ok'] < $result['checked'] ? self::FAILURE : self::SUCCESS;
    }

    private function statusAction(string $setId): int
    {
        $manifest = $this->vault($setId)->getLatestManifest();

        if ($manifest === null) {
            $this->line(sprintf('status set=%s: no manifest yet (run first)', $setId));

            return self::SUCCESS;
        }

        $entries = $manifest['files'] ?? null;
        $entries = is_array($entries) ? $entries : [];

        $bytes = 0;
        foreach ($entries as $entry) {
            $bytes += is_array($entry) && is_int($entry['size'] ?? null) ? $entry['size'] : 0;
        }

        $chunks = $manifest['chunk_hashes'] ?? [];
        $chunks = is_array($chunks) ? count($chunks) : 0;

        $created = is_string($manifest['created'] ?? null) ? (string) $manifest['created'] : 'unknown';

        $this->line(sprintf(
            'status set=%s {files:%d, bytes:%d, chunks:%d, created:%s}',
            $setId,
            count($entries),
            $bytes,
            $chunks,
            $created,
        ));

        return self::SUCCESS;
    }

    private function vault(string $setId): VaultInterface
    {
        $factory = $this->getLaravel()->make(self::VAULT_FACTORY_KEY);

        if (!is_callable($factory) || is_string($factory)) {
            throw new RuntimeException(self::VAULT_FACTORY_KEY . ' must bind a callable(string): VaultInterface');
        }

        return $factory($setId);
    }

    /**
     * --passphrase= falls back to env TELEGRAM_CLIENT_BACKUP_PASSPHRASE;
     * required actions fail loud (caught in handle) when neither is set.
     * The value never reaches the output.
     */
    private function passphrase(string $action): string
    {
        $passphrase = (string) ($this->option('passphrase') ?? '');

        if ($passphrase === '') {
            $passphrase = (string) (getenv('TELEGRAM_CLIENT_BACKUP_PASSPHRASE') ?: '');
        }

        if ($passphrase === '') {
            throw new RuntimeException("{$action} needs --passphrase= or TELEGRAM_CLIENT_BACKUP_PASSPHRASE.");
        }

        return $passphrase;
    }
}

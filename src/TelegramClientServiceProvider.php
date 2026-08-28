<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient;

use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Redis\RedisManager;
use Illuminate\Support\ServiceProvider;
use MeRezaRezaei\TelegramClient\Backup\InMemoryVault;
use MeRezaRezaei\TelegramClient\Backup\TelegramVault;
use MeRezaRezaei\TelegramClient\Backup\VaultInterface;
use MeRezaRezaei\TelegramClient\Bus\LaravelRedisAdapter;
use MeRezaRezaei\TelegramClient\Bus\RedisConnectionContract;
use MeRezaRezaei\TelegramClient\Console\BackfillCommand;
use MeRezaRezaei\TelegramClient\Console\BackupCommand;
use MeRezaRezaei\TelegramClient\Console\IngestCommand;
use MeRezaRezaei\TelegramClient\Daemon\AccountWorker;
use MeRezaRezaei\TelegramClient\Ingest\EntityAggregator;
use MeRezaRezaei\TelegramClient\Ingest\UpdateIngestor;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;
use MeRezaRezaei\TelegramClient\Schema\RegenerateCommand;
use MeRezaRezaei\Teleproto\Services\UserAccountScope;
use RuntimeException;
use Throwable;

/**
 * The package's single root service provider.
 *
 * P2 review note M1 (naming deviation, carried to P3): Laravel convention
 * often splits per-domain providers (BusServiceProvider, DaemonService-
 * Provider, IngestServiceProvider, ...). This package deliberately keeps
 * ONE root provider: the domains share bindings (config repository,
 * Redis contract, the ingest singletons the bus consumer also resolves),
 * the mergeConfigFrom/publishes surface stays a single file for host
 * apps, and the class name matches the packaged default in composer
 * extra.laravel.providers. The register() sections below are the seam to
 * split along IF a domain ever needs independent lifecycle.
 */
final class TelegramClientServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(SchemaRegenerator::class);
        $this->app->singleton(UpdateIngestor::class);
        $this->app->singleton(EntityAggregator::class);
        $this->app->singleton(TelegramClient::class); // public face (plan Task 5)

        $this->app->bind(RedisConnectionContract::class, static function ($app): RedisConnectionContract {
            $manager = $app->bound('redis') ? $app->make('redis') : null;

            if ($manager instanceof RedisManager) {
                /** @var ConfigRepository $config */
                $config = $app->make('config');
                $connection = (string) $config->get('telegram-client.bus.connection', 'default');

                return new LaravelRedisAdapter($manager->connection($connection));
            }

            // No illuminate redis service: fail loudly. Tests bind the
            // in-memory ArrayRedis double to this contract themselves; a
            // silent fallback here would hide a misconfigured host app.
            throw new RuntimeException(
                'telegram-client bus requires the illuminate redis service (app("redis")); '
                . 'install illuminate/redis (predis or phpredis driver) or bind '
                . RedisConnectionContract::class . ' yourself.',
            );
        });

        // Backfill seams (Phase 3, Task 4). The scope resolver reads the
        // shared daemon.accounts registry — one account config surface for
        // the daemon and the backfill command.
        $this->app->bind(BackfillCommand::SCOPE_RESOLVER_KEY, static function ($app): callable {
            return static function (int $accountId) use ($app): UserAccountScope {
                /** @var ConfigRepository $config */
                $config = $app->make('config');

                foreach ((array) $config->get('telegram-client.daemon.accounts', []) as $account) {
                    if ((int) ($account['account_id'] ?? 0) === $accountId) {
                        return AccountWorker::buildLiveScope($account);
                    }
                }

                throw new RuntimeException(
                    "no telegram-client.daemon.accounts entry with account_id={$accountId} "
                    . '(the backfill command resolves its session through that registry)',
                );
            };
        });

        // Default batch writer: each fetched page lands as a plain
        // messages.messages ingest under the account's tenancy (route
        // dedup is deliberately NOT used — see BackfillCommand).
        $this->app->bind(BackfillCommand::INGESTER_KEY, static function ($app): callable {
            return static function (int $accountId) use ($app): callable {
                $ingestor = $app->make(UpdateIngestor::class);

                return static function (array $messages) use ($ingestor, $accountId): array {
                    try {
                        $root = $ingestor->ingest([
                            '_' => 'messages.messages',
                            'messages' => $messages,
                            'chats' => [],
                            'users' => [],
                        ], $accountId);

                        return ['stored' => count($messages), 'root' => $root->getKey()];
                    } catch (Throwable) {
                        return ['stored' => 0]; // v1 report-only: a failing batch never kills the fetch loop
                    }
                };
            };
        });

        // Backup vault factory (Phase 4, Task 4): callable(string $setId):
        // VaultInterface for telegram-client:backup. Driver-aware —
        // 'memory' shares one InMemoryVault per set for the process (so
        // run→restore round-trips offline; nothing is persisted), while
        // 'telegram' reuses the P3 SCOPE_RESOLVER_KEY seam (shared
        // daemon.accounts registry, AccountWorker::buildLiveScope) to
        // build the real channel-backed TelegramVault.
        $this->app->bind(BackupCommand::VAULT_FACTORY_KEY, static function ($app): callable {
            return static function (string $setId) use ($app): VaultInterface {
                /** @var ConfigRepository $config */
                $config = $app->make('config');
                $driver = (string) $config->get('telegram-client.backup.driver', 'memory');

                if ($driver === 'memory') {
                    $key = 'telegram-client.backup.vault.' . $setId;
                    if (! $app->bound($key)) {
                        $app->bind($key, static fn (): VaultInterface => new InMemoryVault(), true);
                    }

                    /** @var VaultInterface */
                    return $app->make($key);
                }

                if ($driver !== 'telegram') {
                    throw new RuntimeException("unknown backup driver \"{$driver}\" — expected memory|telegram.");
                }

                $accountId = (int) ($config->get('telegram-client.backup.account') ?? 0);
                if ($accountId <= 0) {
                    throw new RuntimeException(
                        'backup driver "telegram" needs telegram-client.backup.account (a daemon.accounts account_id).',
                    );
                }

                $resolver = $app->make(BackfillCommand::SCOPE_RESOLVER_KEY);
                if (! is_callable($resolver) || is_string($resolver)) {
                    throw new RuntimeException(
                        BackfillCommand::SCOPE_RESOLVER_KEY . ' must bind a callable(int): UserAccountScope',
                    );
                }

                return TelegramVault::forScope($resolver($accountId), $setId);
            };
        });

        $this->mergeConfigFrom(dirname(__DIR__) . '/config/telegram-client.php', 'telegram-client');
    }

    public function boot(): void
    {
        // Curated migration dial (plan Task 4): the publishable subset in
        // migrations/ — the full layer mirror stays in generated/.
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([RegenerateCommand::class, IngestCommand::class, BackfillCommand::class, BackupCommand::class]);
        }
    }
}

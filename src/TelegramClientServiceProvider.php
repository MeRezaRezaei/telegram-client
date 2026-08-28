<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient;

use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Redis\RedisManager;
use Illuminate\Support\ServiceProvider;
use MeRezaRezaei\TelegramClient\Bus\LaravelRedisAdapter;
use MeRezaRezaei\TelegramClient\Bus\RedisConnectionContract;
use MeRezaRezaei\TelegramClient\Console\IngestCommand;
use MeRezaRezaei\TelegramClient\Ingest\EntityAggregator;
use MeRezaRezaei\TelegramClient\Ingest\UpdateIngestor;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;
use MeRezaRezaei\TelegramClient\Schema\RegenerateCommand;
use RuntimeException;

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

        $this->mergeConfigFrom(dirname(__DIR__) . '/config/telegram-client.php', 'telegram-client');
    }

    public function boot(): void
    {
        // Curated migration dial (plan Task 4): the publishable subset in
        // migrations/ — the full layer mirror stays in generated/.
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([RegenerateCommand::class, IngestCommand::class]);
        }
    }
}

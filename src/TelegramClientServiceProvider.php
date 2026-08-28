<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient;

use Illuminate\Support\ServiceProvider;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;
use MeRezaRezaei\TelegramClient\Schema\RegenerateCommand;

final class TelegramClientServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(SchemaRegenerator::class);
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/telegram-client.php', 'telegram-client');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([RegenerateCommand::class]);
        }
    }
}

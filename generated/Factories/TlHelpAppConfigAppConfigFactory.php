<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpAppConfigAppConfig (help.appConfig). */
final class TlHelpAppConfigAppConfigFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpAppConfigAppConfig> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpAppConfigAppConfig::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'hash' => 1,
            'config' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

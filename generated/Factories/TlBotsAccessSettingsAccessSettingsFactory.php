<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotsAccessSettingsAccessSettings (bots.accessSettings). */
final class TlBotsAccessSettingsAccessSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsAccessSettingsAccessSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsAccessSettingsAccessSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'restricted' => true,
        ];
    }
}

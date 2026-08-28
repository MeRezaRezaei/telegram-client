<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAutoSaveSettingsAutoSaveSettings (autoSaveSettings). */
final class TlAutoSaveSettingsAutoSaveSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAutoSaveSettingsAutoSaveSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAutoSaveSettingsAutoSaveSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'photos' => true,
            'videos' => true,
            'video_max_size' => 1004,
        ];
    }
}

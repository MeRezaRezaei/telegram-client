<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountAutoDownloadSettingsAutoDownloadSettings (account.autoDownloadSettings). */
final class TlAccountAutoDownloadSettingsAutoDownloadSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAutoDownloadSettingsAutoDownloadSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAutoDownloadSettingsAutoDownloadSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'low' => (string) new \Symfony\Component\Uid\UuidV7(),
            'medium' => (string) new \Symfony\Component\Uid\UuidV7(),
            'high' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

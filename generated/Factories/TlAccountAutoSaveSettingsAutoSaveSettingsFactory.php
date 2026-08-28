<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountAutoSaveSettingsAutoSaveSettings (account.autoSaveSettings). */
final class TlAccountAutoSaveSettingsAutoSaveSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAutoSaveSettingsAutoSaveSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAutoSaveSettingsAutoSaveSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'users_settings' => (string) new \Symfony\Component\Uid\UuidV7(),
            'chats_settings' => (string) new \Symfony\Component\Uid\UuidV7(),
            'broadcasts_settings' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

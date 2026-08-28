<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountPasswordSettingsPasswordSettings (account.passwordSettings). */
final class TlAccountPasswordSettingsPasswordSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountPasswordSettingsPasswordSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountPasswordSettingsPasswordSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'email' => 'email-2',
            'secure_settings' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

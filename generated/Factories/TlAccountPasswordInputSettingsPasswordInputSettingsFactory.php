<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountPasswordInputSettingsPasswordInputSettings (account.passwordInputSettings). */
final class TlAccountPasswordInputSettingsPasswordInputSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountPasswordInputSettingsPasswordInputSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountPasswordInputSettingsPasswordInputSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'new_algo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'new_password_hash' => 'Ynl0ZXMtMw==',
            'hint' => 'hint-4',
            'email' => 'email-5',
            'new_secure_settings' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

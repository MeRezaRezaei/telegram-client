<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPasskeyResponseInputPasskeyResponseLogin (inputPasskeyResponseLogin). */
final class TlInputPasskeyResponseInputPasskeyResponseLoginFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyResponseInputPasskeyResponseLogin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyResponseInputPasskeyResponseLogin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'client_data' => (string) new \Symfony\Component\Uid\UuidV7(),
            'authenticator_data' => 'Ynl0ZXMtMg==',
            'signature' => 'Ynl0ZXMtMw==',
            'user_handle' => 'user_handle-4',
        ];
    }
}

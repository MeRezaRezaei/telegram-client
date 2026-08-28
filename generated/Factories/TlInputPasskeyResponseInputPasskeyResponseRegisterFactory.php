<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPasskeyResponseInputPasskeyResponseRegister (inputPasskeyResponseRegister). */
final class TlInputPasskeyResponseInputPasskeyResponseRegisterFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyResponseInputPasskeyResponseRegister> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyResponseInputPasskeyResponseRegister::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'client_data' => (string) new \Symfony\Component\Uid\UuidV7(),
            'attestation_data' => 'Ynl0ZXMtMg==',
        ];
    }
}

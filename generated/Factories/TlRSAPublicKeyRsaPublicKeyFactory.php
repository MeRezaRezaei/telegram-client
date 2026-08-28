<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRSAPublicKeyRsaPublicKey (rsa_public_key). */
final class TlRSAPublicKeyRsaPublicKeyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRSAPublicKeyRsaPublicKey> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRSAPublicKeyRsaPublicKey::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'n' => 'n-1',
            'e' => 'e-2',
        ];
    }
}

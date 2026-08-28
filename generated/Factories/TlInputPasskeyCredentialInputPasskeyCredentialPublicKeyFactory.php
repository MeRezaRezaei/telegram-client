<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPasskeyCredentialInputPasskeyCredentialPublicKey (inputPasskeyCredentialPublicKey). */
final class TlInputPasskeyCredentialInputPasskeyCredentialPublicKeyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyCredentialInputPasskeyCredentialPublicKey> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPasskeyCredentialInputPasskeyCredentialPublicKey::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 'id-1',
            'raw_id' => 'raw_id-2',
            'response' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

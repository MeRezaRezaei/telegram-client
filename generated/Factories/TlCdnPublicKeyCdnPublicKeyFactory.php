<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlCdnPublicKeyCdnPublicKey (cdnPublicKey). */
final class TlCdnPublicKeyCdnPublicKeyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlCdnPublicKeyCdnPublicKey> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlCdnPublicKeyCdnPublicKey::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'dc_id' => 1,
            'public_key' => 'public_key-2',
        ];
    }
}

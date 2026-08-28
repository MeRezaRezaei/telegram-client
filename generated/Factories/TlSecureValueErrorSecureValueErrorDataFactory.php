<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSecureValueErrorSecureValueErrorData (secureValueErrorData). */
final class TlSecureValueErrorSecureValueErrorDataFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueErrorSecureValueErrorData> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueErrorSecureValueErrorData::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'data_hash' => 'Ynl0ZXMtMg==',
            'field' => 'field-3',
            'text' => 'text-4',
        ];
    }
}

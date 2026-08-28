<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlFutureSaltFutureSalt (future_salt). */
final class TlFutureSaltFutureSaltFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFutureSaltFutureSalt> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFutureSaltFutureSalt::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'valid_since' => 1,
            'valid_until' => 2,
            'salt' => 1003,
        ];
    }
}

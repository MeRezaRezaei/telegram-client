<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlErrorError (error). */
final class TlErrorErrorFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlErrorError> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlErrorError::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'code' => 1,
            'text' => 'text-2',
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlNearestDcNearestDc (nearestDc). */
final class TlNearestDcNearestDcFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlNearestDcNearestDc> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlNearestDcNearestDc::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'country' => 'country-1',
            'this_dc' => 2,
            'nearest_dc' => 3,
        ];
    }
}

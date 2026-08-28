<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMaskCoordsMaskCoords (maskCoords). */
final class TlMaskCoordsMaskCoordsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMaskCoordsMaskCoords> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMaskCoordsMaskCoords::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'n' => 1,
            'x' => 0.2,
            'y' => 0.3,
            'zoom' => 0.4,
        ];
    }
}

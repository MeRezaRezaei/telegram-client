<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaCoordinatesMediaAreaCoordinates (mediaAreaCoordinates). */
final class TlMediaAreaCoordinatesMediaAreaCoordinatesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaCoordinatesMediaAreaCoordinates> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaCoordinatesMediaAreaCoordinates::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'x' => 0.2,
            'y' => 0.3,
            'w' => 0.4,
            'h' => 0.5,
            'rotation' => 0.6,
            'radius' => 0.7,
        ];
    }
}

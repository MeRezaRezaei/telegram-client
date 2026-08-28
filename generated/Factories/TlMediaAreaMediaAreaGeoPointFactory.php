<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaMediaAreaGeoPoint (mediaAreaGeoPoint). */
final class TlMediaAreaMediaAreaGeoPointFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaGeoPoint> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaGeoPoint::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'coordinates' => (string) new \Symfony\Component\Uid\UuidV7(),
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'address' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

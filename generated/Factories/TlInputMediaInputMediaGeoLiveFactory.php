<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaGeoLive (inputMediaGeoLive). */
final class TlInputMediaInputMediaGeoLiveFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaGeoLive> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaGeoLive::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'stopped' => true,
            'geo_point' => (string) new \Symfony\Component\Uid\UuidV7(),
            'heading' => 4,
            'period' => 5,
            'proximity_notification_radius' => 6,
        ];
    }
}

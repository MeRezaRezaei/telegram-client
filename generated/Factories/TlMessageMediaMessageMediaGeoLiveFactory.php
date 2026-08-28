<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaGeoLive (messageMediaGeoLive). */
final class TlMessageMediaMessageMediaGeoLiveFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaGeoLive> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaGeoLive::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'heading' => 3,
            'period' => 4,
            'proximity_notification_radius' => 5,
        ];
    }
}

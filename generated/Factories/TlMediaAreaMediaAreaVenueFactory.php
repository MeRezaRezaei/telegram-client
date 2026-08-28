<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaMediaAreaVenue (mediaAreaVenue). */
final class TlMediaAreaMediaAreaVenueFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaVenue> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaVenue::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'coordinates' => (string) new \Symfony\Component\Uid\UuidV7(),
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'title' => 'title-3',
            'address' => 'address-4',
            'provider' => 'provider-5',
            'venue_id' => 'venue_id-6',
            'venue_type' => 'venue_type-7',
        ];
    }
}

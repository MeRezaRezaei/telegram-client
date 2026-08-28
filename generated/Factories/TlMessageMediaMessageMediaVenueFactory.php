<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaVenue (messageMediaVenue). */
final class TlMessageMediaMessageMediaVenueFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaVenue> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaVenue::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'title' => 'title-2',
            'address' => 'address-3',
            'provider' => 'provider-4',
            'venue_id' => 'venue_id-5',
            'venue_type' => 'venue_type-6',
        ];
    }
}

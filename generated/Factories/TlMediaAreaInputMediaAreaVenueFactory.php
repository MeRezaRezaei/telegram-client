<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaInputMediaAreaVenue (inputMediaAreaVenue). */
final class TlMediaAreaInputMediaAreaVenueFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaInputMediaAreaVenue> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaInputMediaAreaVenue::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'coordinates' => (string) new \Symfony\Component\Uid\UuidV7(),
            'query_id' => 1002,
            'result_id' => 'result_id-3',
        ];
    }
}

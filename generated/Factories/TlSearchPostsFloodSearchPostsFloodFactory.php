<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSearchPostsFloodSearchPostsFlood (searchPostsFlood). */
final class TlSearchPostsFloodSearchPostsFloodFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSearchPostsFloodSearchPostsFlood> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSearchPostsFloodSearchPostsFlood::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'query_is_free' => true,
            'total_daily' => 3,
            'remains' => 4,
            'wait_till' => 5,
            'stars_amount' => 1006,
        ];
    }
}

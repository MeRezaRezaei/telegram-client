<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBoostBoost (boost). */
final class TlBoostBoostFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBoostBoost> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBoostBoost::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'gift' => true,
            'giveaway' => true,
            'unclaimed' => true,
            'tl_id' => 'id-5',
            'user_id' => 1006,
            'giveaway_msg_id' => 7,
            'date' => 8,
            'expires' => 9,
            'used_gift_slug' => 'used_gift_slug-10',
            'multiplier' => 11,
            'stars' => 1012,
        ];
    }
}

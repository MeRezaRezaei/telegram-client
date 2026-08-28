<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPrepaidGiveawayPrepaidGiveaway (prepaidGiveaway). */
final class TlPrepaidGiveawayPrepaidGiveawayFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPrepaidGiveawayPrepaidGiveaway> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPrepaidGiveawayPrepaidGiveaway::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 1001,
            'months' => 2,
            'quantity' => 3,
            'date' => 4,
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStarsGiveawayOptionStarsGiveawayOption (starsGiveawayOption). */
final class TlStarsGiveawayOptionStarsGiveawayOptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarsGiveawayOptionStarsGiveawayOption> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarsGiveawayOptionStarsGiveawayOption::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'extended' => true,
            'tl_default' => true,
            'stars' => 1004,
            'yearly_boosts' => 5,
            'store_product' => 'store_product-6',
            'currency' => 'currency-7',
            'amount' => 1008,
        ];
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionPrizeStars (messageActionPrizeStars). */
final class TlMessageActionMessageActionPrizeStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPrizeStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPrizeStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'unclaimed' => true,
            'stars' => 1003,
            'transaction_id' => 'transaction_id-4',
            'boost_peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'giveaway_msg_id' => 6,
        ];
    }
}

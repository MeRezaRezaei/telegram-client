<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuctionBidLevelAuctionBidLevel (auctionBidLevel). */
final class TlAuctionBidLevelAuctionBidLevelFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuctionBidLevelAuctionBidLevel> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuctionBidLevelAuctionBidLevel::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'pos' => 1,
            'amount' => 1002,
            'date' => 3,
        ];
    }
}

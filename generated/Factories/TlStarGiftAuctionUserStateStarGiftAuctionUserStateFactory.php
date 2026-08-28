<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStarGiftAuctionUserStateStarGiftAuctionUserState (starGiftAuctionUserState). */
final class TlStarGiftAuctionUserStateStarGiftAuctionUserStateFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAuctionUserStateStarGiftAuctionUserState> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAuctionUserStateStarGiftAuctionUserState::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'returned' => true,
            'bid_amount' => 1003,
            'bid_date' => 4,
            'min_bid_amount' => 1005,
            'bid_peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'acquired_count' => 7,
        ];
    }
}

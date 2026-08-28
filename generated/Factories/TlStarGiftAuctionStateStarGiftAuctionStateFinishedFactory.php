<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStarGiftAuctionStateStarGiftAuctionStateFinished (starGiftAuctionStateFinished). */
final class TlStarGiftAuctionStateStarGiftAuctionStateFinishedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAuctionStateStarGiftAuctionStateFinished> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAuctionStateStarGiftAuctionStateFinished::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'start_date' => 2,
            'end_date' => 3,
            'average_price' => 1004,
            'listed_count' => 5,
            'fragment_listed_count' => 6,
            'fragment_listed_url' => 'fragment_listed_url-7',
        ];
    }
}

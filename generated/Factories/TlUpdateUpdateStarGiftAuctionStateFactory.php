<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateStarGiftAuctionState (updateStarGiftAuctionState). */
final class TlUpdateUpdateStarGiftAuctionStateFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStarGiftAuctionState> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStarGiftAuctionState::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'gift_id' => 1001,
            'state' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

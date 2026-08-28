<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputInvoiceInputInvoiceStarGiftAuctionBid (inputInvoiceStarGiftAuctionBid). */
final class TlInputInvoiceInputInvoiceStarGiftAuctionBidFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStarGiftAuctionBid> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStarGiftAuctionBid::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'hide_name' => true,
            'update_bid' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'gift_id' => 1005,
            'bid_amount' => 1006,
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}

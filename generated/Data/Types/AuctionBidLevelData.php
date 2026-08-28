<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for auctionBidLevel of AuctionBidLevel.
 */
final class AuctionBidLevelData extends TlAuctionBidLevelAbstractData
{
    public function __construct(
    public int $pos,
    public int $amount,
    public int $date,
    ) {
    }
}

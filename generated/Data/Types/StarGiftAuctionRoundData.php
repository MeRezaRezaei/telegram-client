<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAuctionRound of StarGiftAuctionRound.
 */
final class StarGiftAuctionRoundData extends TlStarGiftAuctionRoundAbstractData
{
    public function __construct(
    public int $num,
    public int $duration,
    ) {
    }
}

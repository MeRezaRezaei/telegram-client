<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateStarGiftAuctionState of Update.
 */
final class UpdateStarGiftAuctionStateData extends TlUpdateAbstractData
{
    public function __construct(
    public int $giftId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAuctionStateAbstractData $state,
    ) {
    }
}

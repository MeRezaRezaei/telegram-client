<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAuctionUserState of StarGiftAuctionUserState.
 */
final class StarGiftAuctionUserStateData extends TlStarGiftAuctionUserStateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $returned,
    public int $bidAmount,
    public int $bidDate,
    public int $minBidAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $bidPeer,
    public int $acquiredCount,
    ) {
    }
}

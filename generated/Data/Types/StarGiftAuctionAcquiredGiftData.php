<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAuctionAcquiredGift of StarGiftAuctionAcquiredGift.
 */
final class StarGiftAuctionAcquiredGiftData extends TlStarGiftAuctionAcquiredGiftAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nameHidden,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $date,
    public int $bidAmount,
    public int $round,
    public int $pos,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    public int $giftNum,
    ) {
    }
}

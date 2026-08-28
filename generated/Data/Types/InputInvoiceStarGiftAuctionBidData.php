<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputInvoiceStarGiftAuctionBid of InputInvoice.
 */
final class InputInvoiceStarGiftAuctionBidData extends TlInputInvoiceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hideName,
    public bool $updateBid,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $peer,
    public int $giftId,
    public int $bidAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    ) {
    }
}

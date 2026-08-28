<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionStarGiftPurchaseOffer of MessageAction.
 */
final class MessageActionStarGiftPurchaseOfferData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $accepted,
    public bool $declined,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $price,
    public int $expiresAt,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionStarGiftPurchaseOfferDeclined of MessageAction.
 */
final class MessageActionStarGiftPurchaseOfferDeclinedData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $expired,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $price,
    ) {
    }
}

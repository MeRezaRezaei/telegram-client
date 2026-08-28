<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputInvoiceBusinessBotTransferStars of InputInvoice.
 */
final class InputInvoiceBusinessBotTransferStarsData extends TlInputInvoiceAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputUserAbstractData $bot,
    public int $stars,
    ) {
    }
}

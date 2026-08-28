<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputInvoiceStars of InputInvoice.
 */
final class InputInvoiceStarsData extends TlInputInvoiceAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputStorePaymentPurposeAbstractData $purpose,
    ) {
    }
}

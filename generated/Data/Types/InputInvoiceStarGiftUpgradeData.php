<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputInvoiceStarGiftUpgrade of InputInvoice.
 */
final class InputInvoiceStarGiftUpgradeData extends TlInputInvoiceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $keepOriginalDetails,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputSavedStarGiftAbstractData $stargift,
    ) {
    }
}

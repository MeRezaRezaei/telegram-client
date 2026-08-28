<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputInvoiceStarGiftResale of InputInvoice.
 */
final class InputInvoiceStarGiftResaleData extends TlInputInvoiceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $ton,
    public string $slug,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $toId,
    ) {
    }
}

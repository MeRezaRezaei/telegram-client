<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaInvoice of MessageMedia.
 */
final class MessageMediaInvoiceData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $shippingAddressRequested,
    public bool $test,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public int $receiptMsgId,
    public string $currency,
    public int $totalAmount,
    public string $startParam,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageExtendedMediaAbstractData $extendedMedia,
    ) {
    }
}

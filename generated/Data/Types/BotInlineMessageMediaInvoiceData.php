<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInlineMessageMediaInvoice of BotInlineMessage.
 */
final class BotInlineMessageMediaInvoiceData extends TlBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $shippingAddressRequested,
    public bool $test,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public string $currency,
    public int $totalAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}

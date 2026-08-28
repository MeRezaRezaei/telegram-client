<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionPaymentSent of MessageAction.
 */
final class MessageActionPaymentSentData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $recurringInit,
    public bool $recurringUsed,
    public string $currency,
    public int $totalAmount,
    public string $invoiceSlug,
    public int $subscriptionUntilDate,
    ) {
    }
}

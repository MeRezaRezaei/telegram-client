<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for invoice of Invoice.
 */
final class InvoiceData extends TlInvoiceAbstractData
{
    public function __construct(
    public int $flags,
    public bool $test,
    public bool $nameRequested,
    public bool $phoneRequested,
    public bool $emailRequested,
    public bool $shippingAddressRequested,
    public bool $flexible,
    public bool $phoneToProvider,
    public bool $emailToProvider,
    public bool $recurring,
    public string $currency,
    public array $prices,
    public int $maxTipAmount,
    public ?array $suggestedTipAmounts,
    public string $termsUrl,
    public int $subscriptionPeriod,
    ) {
    }
}

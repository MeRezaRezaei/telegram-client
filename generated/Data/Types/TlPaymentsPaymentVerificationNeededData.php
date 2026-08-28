<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.paymentVerificationNeeded of payments.PaymentResult.
 */
final class TlPaymentsPaymentVerificationNeededData extends TlPaymentsPaymentResultAbstractData
{
    public function __construct(
    public string $url,
    ) {
    }
}

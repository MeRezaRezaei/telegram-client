<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.paymentFormStars of payments.PaymentForm.
 */
final class TlPaymentsPaymentFormStarsData extends TlPaymentsPaymentFormAbstractData
{
    public function __construct(
    public int $flags,
    public int $formId,
    public int $botId,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInvoiceAbstractData $invoice,
    public array $users,
    ) {
    }
}

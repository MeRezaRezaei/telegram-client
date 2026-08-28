<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.paymentForm of payments.PaymentForm.
 */
final class TlPaymentsPaymentFormData extends TlPaymentsPaymentFormAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canSaveCredentials,
    public bool $passwordMissing,
    public int $formId,
    public int $botId,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInvoiceAbstractData $invoice,
    public int $providerId,
    public string $url,
    public string $nativeProvider,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $nativeParams,
    public ?array $additionalMethods,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPaymentRequestedInfoAbstractData $savedInfo,
    public ?array $savedCredentials,
    public array $users,
    ) {
    }
}

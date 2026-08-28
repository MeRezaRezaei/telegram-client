<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.sendStarsForm (crc32 7998c914), returns payments.PaymentResult. */
final class TlPaymentsSendStarsFormData extends Data
{
    public const METHOD = 'payments.sendStarsForm';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $formId,
    public mixed $invoice,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.refundStarsCharge (crc32 25ae8f4a), returns Updates. */
final class TlPaymentsRefundStarsChargeData extends Data
{
    public const METHOD = 'payments.refundStarsCharge';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $userId,
    public string $chargeId,
    ) {
    }
}

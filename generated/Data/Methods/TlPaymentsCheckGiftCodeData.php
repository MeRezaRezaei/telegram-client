<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.checkGiftCode (crc32 8e51b4c1), returns payments.CheckedGiftCode. */
final class TlPaymentsCheckGiftCodeData extends Data
{
    public const METHOD = 'payments.checkGiftCode';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    ) {
    }
}

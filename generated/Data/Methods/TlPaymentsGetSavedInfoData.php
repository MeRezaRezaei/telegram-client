<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getSavedInfo (crc32 227d824b), returns payments.SavedInfo. */
final class TlPaymentsGetSavedInfoData extends Data
{
    public const METHOD = 'payments.getSavedInfo';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

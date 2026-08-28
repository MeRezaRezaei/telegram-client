<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getUniqueStarGiftValueInfo (crc32 4365af6b), returns payments.UniqueStarGiftValueInfo. */
final class TlPaymentsGetUniqueStarGiftValueInfoData extends Data
{
    public const METHOD = 'payments.getUniqueStarGiftValueInfo';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    ) {
    }
}

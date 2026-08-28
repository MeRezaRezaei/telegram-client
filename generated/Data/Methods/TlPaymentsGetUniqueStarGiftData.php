<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getUniqueStarGift (crc32 a1974d72), returns payments.UniqueStarGift. */
final class TlPaymentsGetUniqueStarGiftData extends Data
{
    public const METHOD = 'payments.getUniqueStarGift';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    ) {
    }
}

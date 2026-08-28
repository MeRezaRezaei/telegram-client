<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getSavedStarGift (crc32 b455a106), returns payments.SavedStarGifts. */
final class TlPaymentsGetSavedStarGiftData extends Data
{
    public const METHOD = 'payments.getSavedStarGift';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public array $stargift,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getStarGiftWithdrawalUrl (crc32 d06e93a8), returns payments.StarGiftWithdrawalUrl. */
final class TlPaymentsGetStarGiftWithdrawalUrlData extends Data
{
    public const METHOD = 'payments.getStarGiftWithdrawalUrl';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $stargift,
    public mixed $password,
    ) {
    }
}

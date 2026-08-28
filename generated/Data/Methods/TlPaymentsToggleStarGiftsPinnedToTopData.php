<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.toggleStarGiftsPinnedToTop (crc32 1513e7b0), returns Bool. */
final class TlPaymentsToggleStarGiftsPinnedToTopData extends Data
{
    public const METHOD = 'payments.toggleStarGiftsPinnedToTop';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public array $stargift,
    ) {
    }
}

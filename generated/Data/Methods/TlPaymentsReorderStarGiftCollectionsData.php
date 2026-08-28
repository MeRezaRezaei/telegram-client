<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.reorderStarGiftCollections (crc32 c32af4cc), returns Bool. */
final class TlPaymentsReorderStarGiftCollectionsData extends Data
{
    public const METHOD = 'payments.reorderStarGiftCollections';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public array $order,
    ) {
    }
}

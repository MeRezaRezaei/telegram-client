<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method messages.clearAllDrafts (crc32 7e58ee9c), returns Bool. */
final class TlMessagesClearAllDraftsData extends Data
{
    public const METHOD = 'messages.clearAllDrafts';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

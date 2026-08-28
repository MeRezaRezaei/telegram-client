<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method messages.getRecentLocations (crc32 702a40e0), returns messages.Messages. */
final class TlMessagesGetRecentLocationsData extends Data
{
    public const METHOD = 'messages.getRecentLocations';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public int $limit,
    public int $hash,
    ) {
    }
}

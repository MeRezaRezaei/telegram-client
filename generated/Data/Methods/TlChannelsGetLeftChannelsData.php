<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method channels.getLeftChannels (crc32 8341ecc0), returns messages.Chats. */
final class TlChannelsGetLeftChannelsData extends Data
{
    public const METHOD = 'channels.getLeftChannels';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $offset,
    ) {
    }
}

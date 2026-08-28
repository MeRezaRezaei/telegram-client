<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method messages.getStickerSet (crc32 c8a0ec74), returns messages.StickerSet. */
final class TlMessagesGetStickerSetData extends Data
{
    public const METHOD = 'messages.getStickerSet';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $stickerset,
    public int $hash,
    ) {
    }
}

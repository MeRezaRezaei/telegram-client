<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method stickers.removeStickerFromSet (crc32 f7760f51), returns messages.StickerSet. */
final class TlStickersRemoveStickerFromSetData extends Data
{
    public const METHOD = 'stickers.removeStickerFromSet';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $sticker,
    ) {
    }
}

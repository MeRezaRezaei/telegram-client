<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method messages.installStickerSet (crc32 c78fe460), returns messages.StickerSetInstallResult. */
final class TlMessagesInstallStickerSetData extends Data
{
    public const METHOD = 'messages.installStickerSet';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $stickerset,
    public mixed $archived,
    ) {
    }
}

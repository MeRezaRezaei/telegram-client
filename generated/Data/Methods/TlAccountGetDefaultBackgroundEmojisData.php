<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.getDefaultBackgroundEmojis (crc32 a60ab9ce), returns EmojiList. */
final class TlAccountGetDefaultBackgroundEmojisData extends Data
{
    public const METHOD = 'account.getDefaultBackgroundEmojis';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $hash,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.getDefaultProfilePhotoEmojis (crc32 e2750328), returns EmojiList. */
final class TlAccountGetDefaultProfilePhotoEmojisData extends Data
{
    public const METHOD = 'account.getDefaultProfilePhotoEmojis';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $hash,
    ) {
    }
}

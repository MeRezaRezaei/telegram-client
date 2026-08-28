<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.getChannelDefaultEmojiStatuses (crc32 7727a7d5), returns account.EmojiStatuses. */
final class TlAccountGetChannelDefaultEmojiStatusesData extends Data
{
    public const METHOD = 'account.getChannelDefaultEmojiStatuses';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $hash,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method chatlists.getChatlistUpdates (crc32 89419521), returns chatlists.ChatlistUpdates. */
final class TlChatlistsGetChatlistUpdatesData extends Data
{
    public const METHOD = 'chatlists.getChatlistUpdates';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $chatlist,
    ) {
    }
}

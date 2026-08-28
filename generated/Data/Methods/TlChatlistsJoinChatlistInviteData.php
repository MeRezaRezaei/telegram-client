<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method chatlists.joinChatlistInvite (crc32 a6b1e39a), returns Updates. */
final class TlChatlistsJoinChatlistInviteData extends Data
{
    public const METHOD = 'chatlists.joinChatlistInvite';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    public array $peers,
    ) {
    }
}

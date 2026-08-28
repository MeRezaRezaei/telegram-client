<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.resolveBusinessChatLink (crc32 5492e5ee), returns account.ResolvedBusinessChatLinks. */
final class TlAccountResolveBusinessChatLinkData extends Data
{
    public const METHOD = 'account.resolveBusinessChatLink';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    ) {
    }
}

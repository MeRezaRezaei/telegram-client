<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.editBusinessChatLink (crc32 8c3410af), returns BusinessChatLink. */
final class TlAccountEditBusinessChatLinkData extends Data
{
    public const METHOD = 'account.editBusinessChatLink';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $slug,
    public mixed $link,
    ) {
    }
}

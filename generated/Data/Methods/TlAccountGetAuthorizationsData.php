<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.getAuthorizations (crc32 e320c158), returns account.Authorizations. */
final class TlAccountGetAuthorizationsData extends Data
{
    public const METHOD = 'account.getAuthorizations';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

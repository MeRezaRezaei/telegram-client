<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method auth.resetAuthorizations (crc32 9fab0d1a), returns Bool. */
final class TlAuthResetAuthorizationsData extends Data
{
    public const METHOD = 'auth.resetAuthorizations';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

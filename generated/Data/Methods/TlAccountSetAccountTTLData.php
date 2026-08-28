<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.setAccountTTL (crc32 2442485e), returns Bool. */
final class TlAccountSetAccountTTLData extends Data
{
    public const METHOD = 'account.setAccountTTL';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $ttl,
    ) {
    }
}

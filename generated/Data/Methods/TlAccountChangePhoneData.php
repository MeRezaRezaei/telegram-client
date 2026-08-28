<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.changePhone (crc32 70c32edb), returns User. */
final class TlAccountChangePhoneData extends Data
{
    public const METHOD = 'account.changePhone';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $phoneNumber,
    public string $phoneCodeHash,
    public string $phoneCode,
    ) {
    }
}

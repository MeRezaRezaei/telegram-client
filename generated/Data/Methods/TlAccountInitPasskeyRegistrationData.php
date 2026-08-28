<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.initPasskeyRegistration (crc32 429547e8), returns account.PasskeyRegistrationOptions. */
final class TlAccountInitPasskeyRegistrationData extends Data
{
    public const METHOD = 'account.initPasskeyRegistration';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

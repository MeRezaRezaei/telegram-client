<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.finishTakeoutSession (crc32 1d2652ee), returns Bool. */
final class TlAccountFinishTakeoutSessionData extends Data
{
    public const METHOD = 'account.finishTakeoutSession';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $flags,
    public bool $success,
    ) {
    }
}

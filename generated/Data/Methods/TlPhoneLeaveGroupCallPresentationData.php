<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.leaveGroupCallPresentation (crc32 1c50d144), returns Updates. */
final class TlPhoneLeaveGroupCallPresentationData extends Data
{
    public const METHOD = 'phone.leaveGroupCallPresentation';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $call,
    ) {
    }
}

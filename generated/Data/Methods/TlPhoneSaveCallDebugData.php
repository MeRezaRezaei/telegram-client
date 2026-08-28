<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.saveCallDebug (crc32 277add7e), returns Bool. */
final class TlPhoneSaveCallDebugData extends Data
{
    public const METHOD = 'phone.saveCallDebug';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public mixed $debug,
    ) {
    }
}

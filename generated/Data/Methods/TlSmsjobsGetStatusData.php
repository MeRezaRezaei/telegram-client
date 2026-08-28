<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method smsjobs.getStatus (crc32 10a698e8), returns smsjobs.Status. */
final class TlSmsjobsGetStatusData extends Data
{
    public const METHOD = 'smsjobs.getStatus';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

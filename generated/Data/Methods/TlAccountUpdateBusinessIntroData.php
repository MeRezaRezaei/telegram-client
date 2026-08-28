<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.updateBusinessIntro (crc32 a614d034), returns Bool. */
final class TlAccountUpdateBusinessIntroData extends Data
{
    public const METHOD = 'account.updateBusinessIntro';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $flags,
    public mixed $intro,
    ) {
    }
}

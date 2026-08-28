<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.discardCall (crc32 b2cbc1c0), returns Updates. */
final class TlPhoneDiscardCallData extends Data
{
    public const METHOD = 'phone.discardCall';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $flags,
    public ?bool $video,
    public mixed $peer,
    public int $duration,
    public mixed $reason,
    public int $connectionId,
    ) {
    }
}

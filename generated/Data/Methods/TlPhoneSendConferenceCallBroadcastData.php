<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.sendConferenceCallBroadcast (crc32 c6701900), returns Updates. */
final class TlPhoneSendConferenceCallBroadcastData extends Data
{
    public const METHOD = 'phone.sendConferenceCallBroadcast';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $call,
    public string $block,
    ) {
    }
}

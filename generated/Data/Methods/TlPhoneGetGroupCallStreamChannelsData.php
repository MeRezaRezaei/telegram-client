<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.getGroupCallStreamChannels (crc32 1ab21940), returns phone.GroupCallStreamChannels. */
final class TlPhoneGetGroupCallStreamChannelsData extends Data
{
    public const METHOD = 'phone.getGroupCallStreamChannels';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $call,
    ) {
    }
}

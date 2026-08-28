<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method channels.updateUsername (crc32 3514b3de), returns Bool. */
final class TlChannelsUpdateUsernameData extends Data
{
    public const METHOD = 'channels.updateUsername';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $channel,
    public string $username,
    ) {
    }
}

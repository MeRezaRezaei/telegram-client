<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.toggleConnectedBotPaused (crc32 646e1097), returns Bool. */
final class TlAccountToggleConnectedBotPausedData extends Data
{
    public const METHOD = 'account.toggleConnectedBotPaused';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public mixed $paused,
    ) {
    }
}

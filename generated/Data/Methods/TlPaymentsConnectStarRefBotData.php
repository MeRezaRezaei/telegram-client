<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.connectStarRefBot (crc32 7ed5348a), returns payments.ConnectedStarRefBots. */
final class TlPaymentsConnectStarRefBotData extends Data
{
    public const METHOD = 'payments.connectStarRefBot';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public mixed $bot,
    ) {
    }
}

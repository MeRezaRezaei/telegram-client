<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method payments.getConnectedStarRefBots (crc32 5869a553), returns payments.ConnectedStarRefBots. */
final class TlPaymentsGetConnectedStarRefBotsData extends Data
{
    public const METHOD = 'payments.getConnectedStarRefBots';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $flags,
    public mixed $peer,
    public int $offsetDate,
    public string $offsetLink,
    public int $limit,
    ) {
    }
}

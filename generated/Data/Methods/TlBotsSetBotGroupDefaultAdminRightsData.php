<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method bots.setBotGroupDefaultAdminRights (crc32 925ec9ea), returns Bool. */
final class TlBotsSetBotGroupDefaultAdminRightsData extends Data
{
    public const METHOD = 'bots.setBotGroupDefaultAdminRights';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $adminRights,
    ) {
    }
}

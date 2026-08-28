<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method bots.getAdminedBots (crc32 b0711d83), returns Vector<User>. */
final class TlBotsGetAdminedBotsData extends Data
{
    public const METHOD = 'bots.getAdminedBots';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

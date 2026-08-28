<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method bots.getBotMenuButton (crc32 9c60eb28), returns BotMenuButton. */
final class TlBotsGetBotMenuButtonData extends Data
{
    public const METHOD = 'bots.getBotMenuButton';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $userId,
    ) {
    }
}

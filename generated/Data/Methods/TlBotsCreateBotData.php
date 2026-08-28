<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method bots.createBot (crc32 e5b17f2b), returns User. */
final class TlBotsCreateBotData extends Data
{
    public const METHOD = 'bots.createBot';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $flags,
    public ?bool $viaDeeplink,
    public string $name,
    public string $username,
    public mixed $managerId,
    ) {
    }
}

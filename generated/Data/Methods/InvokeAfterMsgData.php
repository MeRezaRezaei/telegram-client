<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method invokeAfterMsg (crc32 cb9f372d), returns X. */
final class InvokeAfterMsgData extends Data
{
    public const METHOD = 'invokeAfterMsg';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed ${X,
    public int $msgId,
    public mixed $query,
    ) {
    }
}

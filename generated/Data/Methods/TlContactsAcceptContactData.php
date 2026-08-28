<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method contacts.acceptContact (crc32 f831a20f), returns Updates. */
final class TlContactsAcceptContactData extends Data
{
    public const METHOD = 'contacts.acceptContact';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $id,
    ) {
    }
}

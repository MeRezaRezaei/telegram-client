<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method contacts.deleteByPhones (crc32 1013fd9e), returns Bool. */
final class TlContactsDeleteByPhonesData extends Data
{
    public const METHOD = 'contacts.deleteByPhones';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public array $phones,
    ) {
    }
}

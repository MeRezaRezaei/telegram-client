<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method contacts.importContactToken (crc32 13005788), returns User. */
final class TlContactsImportContactTokenData extends Data
{
    public const METHOD = 'contacts.importContactToken';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $token,
    ) {
    }
}

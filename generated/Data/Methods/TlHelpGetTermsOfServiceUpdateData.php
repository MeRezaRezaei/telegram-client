<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method help.getTermsOfServiceUpdate (crc32 2ca51fd1), returns help.TermsOfServiceUpdate. */
final class TlHelpGetTermsOfServiceUpdateData extends Data
{
    public const METHOD = 'help.getTermsOfServiceUpdate';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    ) {
    }
}

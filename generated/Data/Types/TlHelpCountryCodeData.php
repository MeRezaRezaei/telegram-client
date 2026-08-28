<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.countryCode of help.CountryCode.
 */
final class TlHelpCountryCodeData extends TlHelpCountryCodeAbstractData
{
    public function __construct(
    public int $flags,
    public string $countryCode,
    public ?array $prefixes,
    public ?array $patterns,
    ) {
    }
}

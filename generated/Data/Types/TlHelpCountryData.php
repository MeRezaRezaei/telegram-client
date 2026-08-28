<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.country of help.Country.
 */
final class TlHelpCountryData extends TlHelpCountryAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hidden,
    public string $iso2,
    public string $defaultName,
    public string $name,
    public array $countryCodes,
    ) {
    }
}

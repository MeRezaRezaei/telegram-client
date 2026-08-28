<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.countriesList of help.CountriesList.
 */
final class TlHelpCountriesListData extends TlHelpCountriesListAbstractData
{
    public function __construct(
    public array $countries,
    public int $hash,
    ) {
    }
}

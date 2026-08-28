<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type help.CountriesList.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlHelpCountriesListAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'help.countriesList' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpCountriesListData::class,
        'help.countriesListNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlHelpCountriesListNotModifiedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for help.CountriesList');
        /** @var static */
        return $class::from($payload);
    }
}

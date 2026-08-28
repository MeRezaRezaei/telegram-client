<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type BaseTheme.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlBaseThemeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'baseThemeArctic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BaseThemeArcticData::class,
        'baseThemeClassic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BaseThemeClassicData::class,
        'baseThemeDay' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BaseThemeDayData::class,
        'baseThemeNight' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BaseThemeNightData::class,
        'baseThemeTinted' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BaseThemeTintedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for BaseTheme');
        /** @var static */
        return $class::from($payload);
    }
}

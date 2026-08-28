<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type updates.Difference.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUpdatesDifferenceAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'updates.difference' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUpdatesDifferenceData::class,
        'updates.differenceEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUpdatesDifferenceEmptyData::class,
        'updates.differenceSlice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUpdatesDifferenceSliceData::class,
        'updates.differenceTooLong' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUpdatesDifferenceTooLongData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for updates.Difference');
        /** @var static */
        return $class::from($payload);
    }
}

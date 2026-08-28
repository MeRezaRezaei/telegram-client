<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type DialogFilter.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlDialogFilterAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'dialogFilter' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DialogFilterData::class,
        'dialogFilterChatlist' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DialogFilterChatlistData::class,
        'dialogFilterDefault' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DialogFilterDefaultData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for DialogFilter');
        /** @var static */
        return $class::from($payload);
    }
}

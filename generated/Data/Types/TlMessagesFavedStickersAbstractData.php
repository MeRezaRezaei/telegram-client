<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type messages.FavedStickers.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesFavedStickersAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messages.favedStickers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesFavedStickersData::class,
        'messages.favedStickersNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesFavedStickersNotModifiedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for messages.FavedStickers');
        /** @var static */
        return $class::from($payload);
    }
}

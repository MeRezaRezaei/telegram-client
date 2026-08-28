<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PrepaidGiveaway.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPrepaidGiveawayAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'prepaidGiveaway' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrepaidGiveawayData::class,
        'prepaidStarsGiveaway' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrepaidStarsGiveawayData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PrepaidGiveaway');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StarGiftAuctionState.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStarGiftAuctionStateAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'starGiftAuctionState' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAuctionStateData::class,
        'starGiftAuctionStateFinished' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAuctionStateFinishedData::class,
        'starGiftAuctionStateNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAuctionStateNotModifiedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StarGiftAuctionState');
        /** @var static */
        return $class::from($payload);
    }
}

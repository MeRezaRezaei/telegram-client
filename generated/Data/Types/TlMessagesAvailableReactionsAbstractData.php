<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type messages.AvailableReactions.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesAvailableReactionsAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messages.availableReactions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesAvailableReactionsData::class,
        'messages.availableReactionsNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesAvailableReactionsNotModifiedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for messages.AvailableReactions');
        /** @var static */
        return $class::from($payload);
    }
}

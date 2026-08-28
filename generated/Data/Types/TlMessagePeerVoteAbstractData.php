<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessagePeerVote.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagePeerVoteAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messagePeerVote' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessagePeerVoteData::class,
        'messagePeerVoteInputOption' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessagePeerVoteInputOptionData::class,
        'messagePeerVoteMultiple' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessagePeerVoteMultipleData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessagePeerVote');
        /** @var static */
        return $class::from($payload);
    }
}

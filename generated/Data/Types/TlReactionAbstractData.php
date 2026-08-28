<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type Reaction.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlReactionAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'reactionCustomEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ReactionCustomEmojiData::class,
        'reactionEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ReactionEmojiData::class,
        'reactionEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ReactionEmptyData::class,
        'reactionPaid' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ReactionPaidData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for Reaction');
        /** @var static */
        return $class::from($payload);
    }
}

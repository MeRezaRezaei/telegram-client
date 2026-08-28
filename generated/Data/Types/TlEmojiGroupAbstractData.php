<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type EmojiGroup.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlEmojiGroupAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'emojiGroup' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EmojiGroupData::class,
        'emojiGroupGreeting' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EmojiGroupGreetingData::class,
        'emojiGroupPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\EmojiGroupPremiumData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for EmojiGroup');
        /** @var static */
        return $class::from($payload);
    }
}

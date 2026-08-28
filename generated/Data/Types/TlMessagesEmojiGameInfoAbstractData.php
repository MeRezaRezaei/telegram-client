<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type messages.EmojiGameInfo.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesEmojiGameInfoAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messages.emojiGameDiceInfo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesEmojiGameDiceInfoData::class,
        'messages.emojiGameUnavailable' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesEmojiGameUnavailableData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for messages.EmojiGameInfo');
        /** @var static */
        return $class::from($payload);
    }
}

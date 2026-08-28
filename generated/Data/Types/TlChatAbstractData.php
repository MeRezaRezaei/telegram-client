<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type Chat.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChatAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'channel' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelData::class,
        'channelForbidden' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelForbiddenData::class,
        'chat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatData::class,
        'chatEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatEmptyData::class,
        'chatForbidden' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatForbiddenData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for Chat');
        /** @var static */
        return $class::from($payload);
    }
}

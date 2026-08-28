<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputPeer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputPeerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputPeerChannel' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerChannelData::class,
        'inputPeerChannelFromMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerChannelFromMessageData::class,
        'inputPeerChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerChatData::class,
        'inputPeerEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerEmptyData::class,
        'inputPeerSelf' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerSelfData::class,
        'inputPeerUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerUserData::class,
        'inputPeerUserFromMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerUserFromMessageData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputPeer');
        /** @var static */
        return $class::from($payload);
    }
}

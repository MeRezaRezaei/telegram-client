<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ChannelParticipant.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChannelParticipantAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'channelParticipant' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantData::class,
        'channelParticipantAdmin' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantAdminData::class,
        'channelParticipantBanned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantBannedData::class,
        'channelParticipantCreator' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantCreatorData::class,
        'channelParticipantLeft' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantLeftData::class,
        'channelParticipantSelf' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantSelfData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ChannelParticipant');
        /** @var static */
        return $class::from($payload);
    }
}

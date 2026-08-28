<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ChannelParticipantsFilter.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChannelParticipantsFilterAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'channelParticipantsAdmins' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsAdminsData::class,
        'channelParticipantsBanned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsBannedData::class,
        'channelParticipantsBots' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsBotsData::class,
        'channelParticipantsContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsContactsData::class,
        'channelParticipantsKicked' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsKickedData::class,
        'channelParticipantsMentions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsMentionsData::class,
        'channelParticipantsRecent' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsRecentData::class,
        'channelParticipantsSearch' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelParticipantsSearchData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ChannelParticipantsFilter');
        /** @var static */
        return $class::from($payload);
    }
}

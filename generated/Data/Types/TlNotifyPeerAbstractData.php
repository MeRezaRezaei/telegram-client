<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type NotifyPeer.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlNotifyPeerAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'notifyBroadcasts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\NotifyBroadcastsData::class,
        'notifyChats' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\NotifyChatsData::class,
        'notifyForumTopic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\NotifyForumTopicData::class,
        'notifyPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\NotifyPeerData::class,
        'notifyUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\NotifyUsersData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for NotifyPeer');
        /** @var static */
        return $class::from($payload);
    }
}

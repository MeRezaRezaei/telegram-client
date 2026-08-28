<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type AttachMenuPeerType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlAttachMenuPeerTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'attachMenuPeerTypeBotPM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\AttachMenuPeerTypeBotPMData::class,
        'attachMenuPeerTypeBroadcast' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\AttachMenuPeerTypeBroadcastData::class,
        'attachMenuPeerTypeChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\AttachMenuPeerTypeChatData::class,
        'attachMenuPeerTypePM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\AttachMenuPeerTypePMData::class,
        'attachMenuPeerTypeSameBotPM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\AttachMenuPeerTypeSameBotPMData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for AttachMenuPeerType');
        /** @var static */
        return $class::from($payload);
    }
}

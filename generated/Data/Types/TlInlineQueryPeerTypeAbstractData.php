<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InlineQueryPeerType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInlineQueryPeerTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inlineQueryPeerTypeBotPM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypeBotPMData::class,
        'inlineQueryPeerTypeBroadcast' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypeBroadcastData::class,
        'inlineQueryPeerTypeChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypeChatData::class,
        'inlineQueryPeerTypeMegagroup' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypeMegagroupData::class,
        'inlineQueryPeerTypePM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypePMData::class,
        'inlineQueryPeerTypeSameBotPM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InlineQueryPeerTypeSameBotPMData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InlineQueryPeerType');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type RecentMeUrl.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlRecentMeUrlAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'recentMeUrlChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RecentMeUrlChatData::class,
        'recentMeUrlChatInvite' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RecentMeUrlChatInviteData::class,
        'recentMeUrlStickerSet' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RecentMeUrlStickerSetData::class,
        'recentMeUrlUnknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RecentMeUrlUnknownData::class,
        'recentMeUrlUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\RecentMeUrlUserData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for RecentMeUrl');
        /** @var static */
        return $class::from($payload);
    }
}

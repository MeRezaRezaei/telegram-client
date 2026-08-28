<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type TopPeerCategory.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlTopPeerCategoryAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'topPeerCategoryBotsApp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryBotsAppData::class,
        'topPeerCategoryBotsGuestChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryBotsGuestChatData::class,
        'topPeerCategoryBotsInline' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryBotsInlineData::class,
        'topPeerCategoryBotsPM' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryBotsPMData::class,
        'topPeerCategoryChannels' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryChannelsData::class,
        'topPeerCategoryCorrespondents' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryCorrespondentsData::class,
        'topPeerCategoryForwardChats' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryForwardChatsData::class,
        'topPeerCategoryForwardUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryForwardUsersData::class,
        'topPeerCategoryGroups' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryGroupsData::class,
        'topPeerCategoryPhoneCalls' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TopPeerCategoryPhoneCallsData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for TopPeerCategory');
        /** @var static */
        return $class::from($payload);
    }
}

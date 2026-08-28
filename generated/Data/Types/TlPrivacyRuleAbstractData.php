<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PrivacyRule.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPrivacyRuleAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'privacyValueAllowAll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowAllData::class,
        'privacyValueAllowBots' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowBotsData::class,
        'privacyValueAllowChatParticipants' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowChatParticipantsData::class,
        'privacyValueAllowCloseFriends' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowCloseFriendsData::class,
        'privacyValueAllowContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowContactsData::class,
        'privacyValueAllowPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowPremiumData::class,
        'privacyValueAllowUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueAllowUsersData::class,
        'privacyValueDisallowAll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueDisallowAllData::class,
        'privacyValueDisallowBots' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueDisallowBotsData::class,
        'privacyValueDisallowChatParticipants' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueDisallowChatParticipantsData::class,
        'privacyValueDisallowContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueDisallowContactsData::class,
        'privacyValueDisallowUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyValueDisallowUsersData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PrivacyRule');
        /** @var static */
        return $class::from($payload);
    }
}

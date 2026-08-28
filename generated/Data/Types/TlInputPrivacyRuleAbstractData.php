<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputPrivacyRule.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputPrivacyRuleAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputPrivacyValueAllowAll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowAllData::class,
        'inputPrivacyValueAllowBots' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowBotsData::class,
        'inputPrivacyValueAllowChatParticipants' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowChatParticipantsData::class,
        'inputPrivacyValueAllowCloseFriends' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowCloseFriendsData::class,
        'inputPrivacyValueAllowContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowContactsData::class,
        'inputPrivacyValueAllowPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowPremiumData::class,
        'inputPrivacyValueAllowUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueAllowUsersData::class,
        'inputPrivacyValueDisallowAll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueDisallowAllData::class,
        'inputPrivacyValueDisallowBots' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueDisallowBotsData::class,
        'inputPrivacyValueDisallowChatParticipants' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueDisallowChatParticipantsData::class,
        'inputPrivacyValueDisallowContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueDisallowContactsData::class,
        'inputPrivacyValueDisallowUsers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyValueDisallowUsersData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputPrivacyRule');
        /** @var static */
        return $class::from($payload);
    }
}

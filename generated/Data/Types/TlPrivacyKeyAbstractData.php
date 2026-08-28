<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PrivacyKey.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPrivacyKeyAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'privacyKeyAbout' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyAboutData::class,
        'privacyKeyAddedByPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyAddedByPhoneData::class,
        'privacyKeyBirthday' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyBirthdayData::class,
        'privacyKeyChatInvite' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyChatInviteData::class,
        'privacyKeyForwards' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyForwardsData::class,
        'privacyKeyNoPaidMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyNoPaidMessagesData::class,
        'privacyKeyPhoneCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyPhoneCallData::class,
        'privacyKeyPhoneNumber' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyPhoneNumberData::class,
        'privacyKeyPhoneP2P' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyPhoneP2PData::class,
        'privacyKeyProfilePhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyProfilePhotoData::class,
        'privacyKeySavedMusic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeySavedMusicData::class,
        'privacyKeyStarGiftsAutoSave' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyStarGiftsAutoSaveData::class,
        'privacyKeyStatusTimestamp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyStatusTimestampData::class,
        'privacyKeyVoiceMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PrivacyKeyVoiceMessagesData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PrivacyKey');
        /** @var static */
        return $class::from($payload);
    }
}

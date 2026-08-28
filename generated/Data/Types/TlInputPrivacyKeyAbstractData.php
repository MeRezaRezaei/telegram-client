<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputPrivacyKey.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputPrivacyKeyAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputPrivacyKeyAbout' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyAboutData::class,
        'inputPrivacyKeyAddedByPhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyAddedByPhoneData::class,
        'inputPrivacyKeyBirthday' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyBirthdayData::class,
        'inputPrivacyKeyChatInvite' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyChatInviteData::class,
        'inputPrivacyKeyForwards' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyForwardsData::class,
        'inputPrivacyKeyNoPaidMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyNoPaidMessagesData::class,
        'inputPrivacyKeyPhoneCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyPhoneCallData::class,
        'inputPrivacyKeyPhoneNumber' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyPhoneNumberData::class,
        'inputPrivacyKeyPhoneP2P' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyPhoneP2PData::class,
        'inputPrivacyKeyProfilePhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyProfilePhotoData::class,
        'inputPrivacyKeySavedMusic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeySavedMusicData::class,
        'inputPrivacyKeyStarGiftsAutoSave' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyStarGiftsAutoSaveData::class,
        'inputPrivacyKeyStatusTimestamp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyStatusTimestampData::class,
        'inputPrivacyKeyVoiceMessages' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPrivacyKeyVoiceMessagesData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputPrivacyKey');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessagesFilter.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesFilterAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMessagesFilterChatPhotos' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterChatPhotosData::class,
        'inputMessagesFilterContacts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterContactsData::class,
        'inputMessagesFilterDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterDocumentData::class,
        'inputMessagesFilterEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterEmptyData::class,
        'inputMessagesFilterGeo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterGeoData::class,
        'inputMessagesFilterGif' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterGifData::class,
        'inputMessagesFilterMusic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterMusicData::class,
        'inputMessagesFilterMyMentions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterMyMentionsData::class,
        'inputMessagesFilterPhoneCalls' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhoneCallsData::class,
        'inputMessagesFilterPhotoVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhotoVideoData::class,
        'inputMessagesFilterPhotos' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPhotosData::class,
        'inputMessagesFilterPinned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPinnedData::class,
        'inputMessagesFilterPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterPollData::class,
        'inputMessagesFilterRoundVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterRoundVideoData::class,
        'inputMessagesFilterRoundVoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterRoundVoiceData::class,
        'inputMessagesFilterUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterUrlData::class,
        'inputMessagesFilterVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterVideoData::class,
        'inputMessagesFilterVoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagesFilterVoiceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessagesFilter');
        /** @var static */
        return $class::from($payload);
    }
}

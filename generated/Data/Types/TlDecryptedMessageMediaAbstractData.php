<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type DecryptedMessageMedia.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlDecryptedMessageMediaAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'decryptedMessageMediaAudio' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaAudioData::class,
        'decryptedMessageMediaContact' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaContactData::class,
        'decryptedMessageMediaDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaDocumentData::class,
        'decryptedMessageMediaEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaEmptyData::class,
        'decryptedMessageMediaExternalDocument' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaExternalDocumentData::class,
        'decryptedMessageMediaGeoPoint' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaGeoPointData::class,
        'decryptedMessageMediaPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaPhotoData::class,
        'decryptedMessageMediaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaVenueData::class,
        'decryptedMessageMediaVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaVideoData::class,
        'decryptedMessageMediaWebPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DecryptedMessageMediaWebPageData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for DecryptedMessageMedia');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputFileLocation.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputFileLocationAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputDocumentFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputDocumentFileLocationData::class,
        'inputEncryptedFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputEncryptedFileLocationData::class,
        'inputFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputFileLocationData::class,
        'inputGroupCallStream' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputGroupCallStreamData::class,
        'inputPeerPhotoFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPeerPhotoFileLocationData::class,
        'inputPhotoFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPhotoFileLocationData::class,
        'inputPhotoLegacyFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPhotoLegacyFileLocationData::class,
        'inputSecureFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputSecureFileLocationData::class,
        'inputStickerSetThumb' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStickerSetThumbData::class,
        'inputTakeoutFileLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputTakeoutFileLocationData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputFileLocation');
        /** @var static */
        return $class::from($payload);
    }
}

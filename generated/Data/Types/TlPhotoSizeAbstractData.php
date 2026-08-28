<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PhotoSize.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPhotoSizeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'photoCachedSize' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoCachedSizeData::class,
        'photoPathSize' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoPathSizeData::class,
        'photoSize' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoSizeData::class,
        'photoSizeEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoSizeEmptyData::class,
        'photoSizeProgressive' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoSizeProgressiveData::class,
        'photoStrippedSize' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhotoStrippedSizeData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PhotoSize');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type DocumentAttribute.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlDocumentAttributeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'documentAttributeAnimated' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeAnimatedData::class,
        'documentAttributeAudio' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeAudioData::class,
        'documentAttributeCustomEmoji' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeCustomEmojiData::class,
        'documentAttributeFilename' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeFilenameData::class,
        'documentAttributeHasStickers' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeHasStickersData::class,
        'documentAttributeImageSize' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeImageSizeData::class,
        'documentAttributeSticker' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeStickerData::class,
        'documentAttributeVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\DocumentAttributeVideoData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for DocumentAttribute');
        /** @var static */
        return $class::from($payload);
    }
}

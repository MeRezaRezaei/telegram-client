<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type WebPageAttribute.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlWebPageAttributeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'webPageAttributeAiComposeTone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeAiComposeToneData::class,
        'webPageAttributeStarGiftAuction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeStarGiftAuctionData::class,
        'webPageAttributeStarGiftCollection' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeStarGiftCollectionData::class,
        'webPageAttributeStickerSet' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeStickerSetData::class,
        'webPageAttributeStory' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeStoryData::class,
        'webPageAttributeTheme' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeThemeData::class,
        'webPageAttributeUniqueStarGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageAttributeUniqueStarGiftData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for WebPageAttribute');
        /** @var static */
        return $class::from($payload);
    }
}

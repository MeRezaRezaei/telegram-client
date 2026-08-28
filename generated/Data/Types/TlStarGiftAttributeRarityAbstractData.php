<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StarGiftAttributeRarity.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStarGiftAttributeRarityAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'starGiftAttributeRarity' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeRarityData::class,
        'starGiftAttributeRarityEpic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeRarityEpicData::class,
        'starGiftAttributeRarityLegendary' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeRarityLegendaryData::class,
        'starGiftAttributeRarityRare' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeRarityRareData::class,
        'starGiftAttributeRarityUncommon' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeRarityUncommonData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StarGiftAttributeRarity');
        /** @var static */
        return $class::from($payload);
    }
}

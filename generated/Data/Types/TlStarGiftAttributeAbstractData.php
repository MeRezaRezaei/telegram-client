<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StarGiftAttribute.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStarGiftAttributeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'starGiftAttributeBackdrop' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeBackdropData::class,
        'starGiftAttributeModel' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeModelData::class,
        'starGiftAttributeOriginalDetails' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributeOriginalDetailsData::class,
        'starGiftAttributePattern' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StarGiftAttributePatternData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StarGiftAttribute');
        /** @var static */
        return $class::from($payload);
    }
}

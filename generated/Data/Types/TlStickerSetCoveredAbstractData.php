<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StickerSetCovered.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStickerSetCoveredAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'stickerSetCovered' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StickerSetCoveredData::class,
        'stickerSetFullCovered' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StickerSetFullCoveredData::class,
        'stickerSetMultiCovered' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StickerSetMultiCoveredData::class,
        'stickerSetNoCovered' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StickerSetNoCoveredData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StickerSetCovered');
        /** @var static */
        return $class::from($payload);
    }
}

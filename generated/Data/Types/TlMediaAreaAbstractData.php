<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MediaArea.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMediaAreaAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMediaAreaChannelPost' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaAreaChannelPostData::class,
        'inputMediaAreaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMediaAreaVenueData::class,
        'mediaAreaChannelPost' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaChannelPostData::class,
        'mediaAreaGeoPoint' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaGeoPointData::class,
        'mediaAreaStarGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaStarGiftData::class,
        'mediaAreaSuggestedReaction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaSuggestedReactionData::class,
        'mediaAreaUrl' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaUrlData::class,
        'mediaAreaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaVenueData::class,
        'mediaAreaWeather' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MediaAreaWeatherData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MediaArea');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ProfileTab.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlProfileTabAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'profileTabFiles' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabFilesData::class,
        'profileTabGifs' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabGifsData::class,
        'profileTabGifts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabGiftsData::class,
        'profileTabLinks' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabLinksData::class,
        'profileTabMedia' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabMediaData::class,
        'profileTabMusic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabMusicData::class,
        'profileTabPosts' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabPostsData::class,
        'profileTabVoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ProfileTabVoiceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ProfileTab');
        /** @var static */
        return $class::from($payload);
    }
}

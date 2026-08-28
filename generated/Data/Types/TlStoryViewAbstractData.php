<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StoryView.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStoryViewAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'storyView' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StoryViewData::class,
        'storyViewPublicForward' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StoryViewPublicForwardData::class,
        'storyViewPublicRepost' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StoryViewPublicRepostData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StoryView');
        /** @var static */
        return $class::from($payload);
    }
}

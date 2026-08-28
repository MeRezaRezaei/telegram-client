<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type WebPage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlWebPageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'webPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageData::class,
        'webPageEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageEmptyData::class,
        'webPageNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPageNotModifiedData::class,
        'webPagePending' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\WebPagePendingData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for WebPage');
        /** @var static */
        return $class::from($payload);
    }
}

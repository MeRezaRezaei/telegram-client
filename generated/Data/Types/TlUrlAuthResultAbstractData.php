<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type UrlAuthResult.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUrlAuthResultAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'urlAuthResultAccepted' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UrlAuthResultAcceptedData::class,
        'urlAuthResultDefault' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UrlAuthResultDefaultData::class,
        'urlAuthResultRequest' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UrlAuthResultRequestData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for UrlAuthResult');
        /** @var static */
        return $class::from($payload);
    }
}

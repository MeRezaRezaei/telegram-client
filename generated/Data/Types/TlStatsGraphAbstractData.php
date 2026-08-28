<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type StatsGraph.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStatsGraphAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'statsGraph' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StatsGraphData::class,
        'statsGraphAsync' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StatsGraphAsyncData::class,
        'statsGraphError' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\StatsGraphErrorData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for StatsGraph');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type smsjobs.Status.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlSmsjobsStatusAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'smsjobs.status' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSmsjobsStatusData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for smsjobs.Status');
        /** @var static */
        return $class::from($payload);
    }
}

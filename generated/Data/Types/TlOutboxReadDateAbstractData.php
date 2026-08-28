<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type OutboxReadDate.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlOutboxReadDateAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'outboxReadDate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\OutboxReadDateData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for OutboxReadDate');
        /** @var static */
        return $class::from($payload);
    }
}

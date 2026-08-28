<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type contacts.Blocked.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlContactsBlockedAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'contacts.blocked' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlContactsBlockedData::class,
        'contacts.blockedSlice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlContactsBlockedSliceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for contacts.Blocked');
        /** @var static */
        return $class::from($payload);
    }
}

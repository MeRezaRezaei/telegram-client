<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PhoneCall.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPhoneCallAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'phoneCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallData::class,
        'phoneCallAccepted' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallAcceptedData::class,
        'phoneCallDiscarded' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardedData::class,
        'phoneCallEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallEmptyData::class,
        'phoneCallRequested' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallRequestedData::class,
        'phoneCallWaiting' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallWaitingData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PhoneCall');
        /** @var static */
        return $class::from($payload);
    }
}

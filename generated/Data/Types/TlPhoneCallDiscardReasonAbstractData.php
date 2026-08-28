<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PhoneCallDiscardReason.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPhoneCallDiscardReasonAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'phoneCallDiscardReasonBusy' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardReasonBusyData::class,
        'phoneCallDiscardReasonDisconnect' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardReasonDisconnectData::class,
        'phoneCallDiscardReasonHangup' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardReasonHangupData::class,
        'phoneCallDiscardReasonMigrateConferenceCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardReasonMigrateConferenceCallData::class,
        'phoneCallDiscardReasonMissed' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PhoneCallDiscardReasonMissedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PhoneCallDiscardReason');
        /** @var static */
        return $class::from($payload);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessageFwdHeader.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessageFwdHeaderAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messageFwdHeader' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageFwdHeaderData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessageFwdHeader');
        /** @var static */
        return $class::from($payload);
    }
}

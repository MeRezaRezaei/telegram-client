<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputGroupCall.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputGroupCallAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputGroupCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputGroupCallData::class,
        'inputGroupCallInviteMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputGroupCallInviteMessageData::class,
        'inputGroupCallSlug' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputGroupCallSlugData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputGroupCall');
        /** @var static */
        return $class::from($payload);
    }
}

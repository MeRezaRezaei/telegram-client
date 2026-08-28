<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputUser.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputUserAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputUserData::class,
        'inputUserEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputUserEmptyData::class,
        'inputUserFromMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputUserFromMessageData::class,
        'inputUserSelf' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputUserSelfData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputUser');
        /** @var static */
        return $class::from($payload);
    }
}

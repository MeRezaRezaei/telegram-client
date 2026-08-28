<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PasswordKdfAlgo.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlPasswordKdfAlgoAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'passwordKdfAlgoSHA256SHA256PBKDF2HMACSHA512iter100000SHA256ModPow' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PasswordKdfAlgoSHA256SHA256PBKDF2HMACSHA512iter100000SHA256ModPowData::class,
        'passwordKdfAlgoUnknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PasswordKdfAlgoUnknownData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PasswordKdfAlgo');
        /** @var static */
        return $class::from($payload);
    }
}

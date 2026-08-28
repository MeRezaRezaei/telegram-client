<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type SecurePasswordKdfAlgo.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlSecurePasswordKdfAlgoAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'securePasswordKdfAlgoPBKDF2HMACSHA512iter100000' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecurePasswordKdfAlgoPBKDF2HMACSHA512iter100000Data::class,
        'securePasswordKdfAlgoSHA512' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecurePasswordKdfAlgoSHA512Data::class,
        'securePasswordKdfAlgoUnknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecurePasswordKdfAlgoUnknownData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for SecurePasswordKdfAlgo');
        /** @var static */
        return $class::from($payload);
    }
}

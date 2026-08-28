<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type auth.CodeType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlAuthCodeTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'auth.codeTypeCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeCallData::class,
        'auth.codeTypeFlashCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeFlashCallData::class,
        'auth.codeTypeFragmentSms' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeFragmentSmsData::class,
        'auth.codeTypeMissedCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeMissedCallData::class,
        'auth.codeTypeSms' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthCodeTypeSmsData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for auth.CodeType');
        /** @var static */
        return $class::from($payload);
    }
}

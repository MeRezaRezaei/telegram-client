<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type auth.SentCodeType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlAuthSentCodeTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'auth.sentCodeTypeApp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeAppData::class,
        'auth.sentCodeTypeCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeCallData::class,
        'auth.sentCodeTypeEmailCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeEmailCodeData::class,
        'auth.sentCodeTypeFirebaseSms' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeFirebaseSmsData::class,
        'auth.sentCodeTypeFlashCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeFlashCallData::class,
        'auth.sentCodeTypeFragmentSms' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeFragmentSmsData::class,
        'auth.sentCodeTypeMissedCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeMissedCallData::class,
        'auth.sentCodeTypeSetUpEmailRequired' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeSetUpEmailRequiredData::class,
        'auth.sentCodeTypeSms' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeSmsData::class,
        'auth.sentCodeTypeSmsPhrase' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeSmsPhraseData::class,
        'auth.sentCodeTypeSmsWord' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAuthSentCodeTypeSmsWordData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for auth.SentCodeType');
        /** @var static */
        return $class::from($payload);
    }
}

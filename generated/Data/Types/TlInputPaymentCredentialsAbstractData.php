<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputPaymentCredentials.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputPaymentCredentialsAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputPaymentCredentials' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPaymentCredentialsData::class,
        'inputPaymentCredentialsApplePay' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPaymentCredentialsApplePayData::class,
        'inputPaymentCredentialsGooglePay' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPaymentCredentialsGooglePayData::class,
        'inputPaymentCredentialsSaved' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPaymentCredentialsSavedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputPaymentCredentials');
        /** @var static */
        return $class::from($payload);
    }
}

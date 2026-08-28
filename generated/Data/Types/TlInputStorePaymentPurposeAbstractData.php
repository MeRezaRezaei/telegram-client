<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputStorePaymentPurpose.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputStorePaymentPurposeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputStorePaymentAuthCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentAuthCodeData::class,
        'inputStorePaymentGiftPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentGiftPremiumData::class,
        'inputStorePaymentPremiumGiftCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentPremiumGiftCodeData::class,
        'inputStorePaymentPremiumGiveaway' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentPremiumGiveawayData::class,
        'inputStorePaymentPremiumSubscription' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentPremiumSubscriptionData::class,
        'inputStorePaymentStarsGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentStarsGiftData::class,
        'inputStorePaymentStarsGiveaway' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentStarsGiveawayData::class,
        'inputStorePaymentStarsTopup' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputStorePaymentStarsTopupData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputStorePaymentPurpose');
        /** @var static */
        return $class::from($payload);
    }
}

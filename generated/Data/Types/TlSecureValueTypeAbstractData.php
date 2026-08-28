<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type SecureValueType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlSecureValueTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'secureValueTypeAddress' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeAddressData::class,
        'secureValueTypeBankStatement' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeBankStatementData::class,
        'secureValueTypeDriverLicense' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeDriverLicenseData::class,
        'secureValueTypeEmail' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeEmailData::class,
        'secureValueTypeIdentityCard' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeIdentityCardData::class,
        'secureValueTypeInternalPassport' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeInternalPassportData::class,
        'secureValueTypePassport' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypePassportData::class,
        'secureValueTypePassportRegistration' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypePassportRegistrationData::class,
        'secureValueTypePersonalDetails' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypePersonalDetailsData::class,
        'secureValueTypePhone' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypePhoneData::class,
        'secureValueTypeRentalAgreement' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeRentalAgreementData::class,
        'secureValueTypeTemporaryRegistration' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeTemporaryRegistrationData::class,
        'secureValueTypeUtilityBill' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\SecureValueTypeUtilityBillData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for SecureValueType');
        /** @var static */
        return $class::from($payload);
    }
}

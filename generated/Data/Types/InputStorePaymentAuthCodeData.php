<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentAuthCode of InputStorePaymentPurpose.
 */
final class InputStorePaymentAuthCodeData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $restore,
    public string $phoneNumber,
    public string $phoneCodeHash,
    public int $premiumDays,
    public string $currency,
    public int $amount,
    ) {
    }
}

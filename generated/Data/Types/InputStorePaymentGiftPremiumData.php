<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentGiftPremium of InputStorePaymentPurpose.
 */
final class InputStorePaymentGiftPremiumData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputUserAbstractData $userId,
    public string $currency,
    public int $amount,
    ) {
    }
}

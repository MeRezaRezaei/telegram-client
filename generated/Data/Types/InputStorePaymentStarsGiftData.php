<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentStarsGift of InputStorePaymentPurpose.
 */
final class InputStorePaymentStarsGiftData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputUserAbstractData $userId,
    public int $stars,
    public string $currency,
    public int $amount,
    ) {
    }
}

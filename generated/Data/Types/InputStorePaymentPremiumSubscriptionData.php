<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStorePaymentPremiumSubscription of InputStorePaymentPurpose.
 */
final class InputStorePaymentPremiumSubscriptionData extends TlInputStorePaymentPurposeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $restore,
    public bool $upgrade,
    ) {
    }
}

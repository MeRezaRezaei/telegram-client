<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.bankCardData of payments.BankCardData.
 */
final class TlPaymentsBankCardDataData extends TlPaymentsBankCardDataAbstractData
{
    public function __construct(
    public string $title,
    public array $openUrls,
    ) {
    }
}

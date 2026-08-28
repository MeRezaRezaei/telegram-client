<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for premiumSubscriptionOption of PremiumSubscriptionOption.
 */
final class PremiumSubscriptionOptionData extends TlPremiumSubscriptionOptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $current,
    public bool $canPurchaseUpgrade,
    public string $transaction,
    public int $months,
    public string $currency,
    public int $amount,
    public string $botUrl,
    public string $storeProduct,
    ) {
    }
}

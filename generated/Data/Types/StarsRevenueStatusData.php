<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starsRevenueStatus of StarsRevenueStatus.
 */
final class StarsRevenueStatusData extends TlStarsRevenueStatusAbstractData
{
    public function __construct(
    public int $flags,
    public bool $withdrawalEnabled,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $currentBalance,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $availableBalance,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $overallRevenue,
    public int $nextWithdrawalAt,
    ) {
    }
}

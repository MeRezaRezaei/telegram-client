<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.starsRevenueStats of payments.StarsRevenueStats.
 */
final class TlPaymentsStarsRevenueStatsData extends TlPaymentsStarsRevenueStatsAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $topHoursGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $revenueGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsRevenueStatusAbstractData $status,
    public float $usdRate,
    ) {
    }
}

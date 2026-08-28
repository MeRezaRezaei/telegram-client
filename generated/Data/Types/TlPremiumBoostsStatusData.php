<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for premium.boostsStatus of premium.BoostsStatus.
 */
final class TlPremiumBoostsStatusData extends TlPremiumBoostsStatusAbstractData
{
    public function __construct(
    public int $flags,
    public bool $myBoost,
    public int $level,
    public int $currentLevelBoosts,
    public int $boosts,
    public int $giftBoosts,
    public int $nextLevelBoosts,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsPercentValueAbstractData $premiumAudience,
    public string $boostUrl,
    public ?array $prepaidGiveaways,
    public ?array $myBoostSlots,
    ) {
    }
}

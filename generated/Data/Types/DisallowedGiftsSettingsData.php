<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for disallowedGiftsSettings of DisallowedGiftsSettings.
 */
final class DisallowedGiftsSettingsData extends TlDisallowedGiftsSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $disallowUnlimitedStargifts,
    public bool $disallowLimitedStargifts,
    public bool $disallowUniqueStargifts,
    public bool $disallowPremiumGifts,
    public bool $disallowStargiftsFromChannels,
    ) {
    }
}

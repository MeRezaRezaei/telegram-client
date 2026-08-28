<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starsGiveawayOption of StarsGiveawayOption.
 */
final class StarsGiveawayOptionData extends TlStarsGiveawayOptionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $extended,
    public bool $default,
    public int $stars,
    public int $yearlyBoosts,
    public string $storeProduct,
    public string $currency,
    public int $amount,
    public array $winners,
    ) {
    }
}

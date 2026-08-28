<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for prepaidStarsGiveaway of PrepaidGiveaway.
 */
final class PrepaidStarsGiveawayData extends TlPrepaidGiveawayAbstractData
{
    public function __construct(
    public int $id,
    public int $stars,
    public int $quantity,
    public int $boosts,
    public int $date,
    ) {
    }
}

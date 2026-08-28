<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for boost of Boost.
 */
final class BoostData extends TlBoostAbstractData
{
    public function __construct(
    public int $flags,
    public bool $gift,
    public bool $giveaway,
    public bool $unclaimed,
    public string $id,
    public int $userId,
    public int $giveawayMsgId,
    public int $date,
    public int $expires,
    public string $usedGiftSlug,
    public int $multiplier,
    public int $stars,
    ) {
    }
}

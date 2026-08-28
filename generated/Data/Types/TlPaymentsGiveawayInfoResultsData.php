<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.giveawayInfoResults of payments.GiveawayInfo.
 */
final class TlPaymentsGiveawayInfoResultsData extends TlPaymentsGiveawayInfoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $winner,
    public bool $refunded,
    public int $startDate,
    public string $giftCodeSlug,
    public int $starsPrize,
    public int $finishDate,
    public int $winnersCount,
    public int $activatedCount,
    ) {
    }
}

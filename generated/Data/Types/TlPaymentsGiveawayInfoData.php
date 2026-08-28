<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.giveawayInfo of payments.GiveawayInfo.
 */
final class TlPaymentsGiveawayInfoData extends TlPaymentsGiveawayInfoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $participating,
    public bool $preparingResults,
    public int $startDate,
    public int $joinedTooEarlyDate,
    public int $adminDisallowedChatId,
    public string $disallowedCountry,
    ) {
    }
}

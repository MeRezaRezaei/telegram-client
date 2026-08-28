<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stats.megagroupStats of stats.MegagroupStats.
 */
final class TlStatsMegagroupStatsData extends TlStatsMegagroupStatsAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsDateRangeDaysAbstractData $period,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $members,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $messages,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $viewers,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $posters,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $growthGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $membersGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $newMembersBySourceGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $languagesGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $messagesGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $actionsGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $topHoursGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $weekdaysGraph,
    public array $topPosters,
    public array $topAdmins,
    public array $topInviters,
    public array $users,
    ) {
    }
}

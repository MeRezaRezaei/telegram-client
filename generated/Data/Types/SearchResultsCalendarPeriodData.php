<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for searchResultsCalendarPeriod of SearchResultsCalendarPeriod.
 */
final class SearchResultsCalendarPeriodData extends TlSearchResultsCalendarPeriodAbstractData
{
    public function __construct(
    public int $date,
    public int $minMsgId,
    public int $maxMsgId,
    public int $count,
    ) {
    }
}

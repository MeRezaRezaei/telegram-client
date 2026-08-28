<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.searchResultsCalendar of messages.SearchResultsCalendar.
 */
final class TlMessagesSearchResultsCalendarData extends TlMessagesSearchResultsCalendarAbstractData
{
    public function __construct(
    public int $flags,
    public bool $inexact,
    public int $count,
    public int $minDate,
    public int $minMsgId,
    public int $offsetIdOffset,
    public array $periods,
    public array $messages,
    public array $chats,
    public array $users,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesSearchResultsCalendarSearchResultsCalendar (messages.searchResultsCalendar). */
final class TlMessagesSearchResultsCalendarSearchResultsCalendarFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSearchResultsCalendarSearchResultsCalendar> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSearchResultsCalendarSearchResultsCalendar::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'inexact' => true,
            'count' => 3,
            'min_date' => 4,
            'min_msg_id' => 5,
            'offset_id_offset' => 6,
        ];
    }
}

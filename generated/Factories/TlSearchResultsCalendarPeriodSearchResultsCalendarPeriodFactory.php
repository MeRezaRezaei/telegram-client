<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSearchResultsCalendarPeriodSearchResultsCalendarPeriod (searchResultsCalendarPeriod). */
final class TlSearchResultsCalendarPeriodSearchResultsCalendarPeriodFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSearchResultsCalendarPeriodSearchResultsCalendarPeriod> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSearchResultsCalendarPeriodSearchResultsCalendarPeriod::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'date' => 1,
            'min_msg_id' => 2,
            'max_msg_id' => 3,
            'count' => 4,
        ];
    }
}

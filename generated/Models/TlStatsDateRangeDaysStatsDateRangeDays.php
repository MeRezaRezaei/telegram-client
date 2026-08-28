<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for statsDateRangeDays of StatsDateRangeDays (crc32 b637edaf). */
final class TlStatsDateRangeDaysStatsDateRangeDays extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_date_range_days_stats_date_range_days';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'min_date' => 'int',
        'max_date' => 'int',
    ];
}

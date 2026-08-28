<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for statsGroupTopAdmin of StatsGroupTopAdmin (crc32 d7584c87). */
final class TlStatsGroupTopAdminStatsGroupTopAdmin extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_group_top_admin_stats_group_top_admin';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'user_id' => 'int',
        'deleted' => 'int',
        'kicked' => 'int',
        'banned' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for statsGraph of StatsGraph (crc32 8ea464b6). */
final class TlStatsGraphStatsGraph extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_graph_stats_graph';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'json' => 'string',
        'zoom_token' => 'string',
    ];
}

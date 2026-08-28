<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for statsGraphError of StatsGraph (crc32 bedc9822). */
final class TlStatsGraphStatsGraphError extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_graph_stats_graph_error';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'error' => 'string',
    ];
}

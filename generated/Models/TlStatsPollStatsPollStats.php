<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for stats.pollStats of stats.PollStats (crc32 2999beed). */
final class TlStatsPollStatsPollStats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_poll_stats_poll_stats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'votes_graph' => 'string',
    ];
}

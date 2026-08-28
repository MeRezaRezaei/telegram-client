<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param top_posters (table tl_stats_megagroup_stats_megagroup_stats__top_posters). */
final class TlStatsMegagroupStatsMegagroupStatsTop_posters extends TlAnchorModel
{
    protected $table = 'tl_stats_megagroup_stats_megagroup_stats__top_posters';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

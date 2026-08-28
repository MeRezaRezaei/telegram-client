<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsMegagroupStatsMegagroupStatsTop_posters;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsMegagroupStatsMegagroupStatsTop_admins;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsMegagroupStatsMegagroupStatsTop_inviters;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsMegagroupStatsMegagroupStatsUsers;

/** Constructor model for stats.megagroupStats of stats.MegagroupStats (crc32 ef7ff916). */
final class TlStatsMegagroupStatsMegagroupStats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_megagroup_stats_megagroup_stats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'period' => 'string',
        'members' => 'string',
        'messages' => 'string',
        'viewers' => 'string',
        'posters' => 'string',
        'growth_graph' => 'string',
        'members_graph' => 'string',
        'new_members_by_source_graph' => 'string',
        'languages_graph' => 'string',
        'messages_graph' => 'string',
        'actions_graph' => 'string',
        'top_hours_graph' => 'string',
        'weekdays_graph' => 'string',
    ];

    public function topPosters(): HasMany
    {
        return $this->tlChild(TlStatsMegagroupStatsMegagroupStatsTop_posters::class);
    }
    public function topAdmins(): HasMany
    {
        return $this->tlChild(TlStatsMegagroupStatsMegagroupStatsTop_admins::class);
    }
    public function topInviters(): HasMany
    {
        return $this->tlChild(TlStatsMegagroupStatsMegagroupStatsTop_inviters::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlStatsMegagroupStatsMegagroupStatsUsers::class);
    }
}

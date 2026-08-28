<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsPublicForwardsPublicForwardsForwards;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsPublicForwardsPublicForwardsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsPublicForwardsPublicForwardsUsers;

/** Constructor model for stats.publicForwards of stats.PublicForwards (crc32 93037e20). */
final class TlStatsPublicForwardsPublicForwards extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_public_forwards_public_forwards';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
    ];

    public function forwards(): HasMany
    {
        return $this->tlChild(TlStatsPublicForwardsPublicForwardsForwards::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlStatsPublicForwardsPublicForwardsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlStatsPublicForwardsPublicForwardsUsers::class);
    }
}

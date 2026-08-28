<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsPopularAppBotsPopularAppBotsUsers;

/** Constructor model for bots.popularAppBots of bots.PopularAppBots (crc32 1991b13b). */
final class TlBotsPopularAppBotsPopularAppBots extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bots_popular_app_bots_popular_app_bots';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'next_offset' => 'string',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlBotsPopularAppBotsPopularAppBotsUsers::class);
    }
}

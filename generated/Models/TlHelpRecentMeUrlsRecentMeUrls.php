<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpRecentMeUrlsRecentMeUrlsUrls;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpRecentMeUrlsRecentMeUrlsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpRecentMeUrlsRecentMeUrlsUsers;

/** Constructor model for help.recentMeUrls of help.RecentMeUrls (crc32 0e0310d7). */
final class TlHelpRecentMeUrlsRecentMeUrls extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_recent_me_urls_recent_me_urls';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function urls(): HasMany
    {
        return $this->tlChild(TlHelpRecentMeUrlsRecentMeUrlsUrls::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlHelpRecentMeUrlsRecentMeUrlsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlHelpRecentMeUrlsRecentMeUrlsUsers::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for recentMeUrlChatInvite of RecentMeUrl (crc32 eb49081d). */
final class TlRecentMeUrlRecentMeUrlChatInvite extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_recent_me_url_recent_me_url_chat_invite';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'chat_invite' => 'string',
    ];
}

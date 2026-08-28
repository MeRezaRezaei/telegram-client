<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatFullChatFullBot_info;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatFullChatFullRecent_requesters;

/** Constructor model for chatFull of ChatFull (crc32 2633421b). */
final class TlChatFullChatFull extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_full_chat_full';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'can_set_username' => 'bool',
        'has_scheduled' => 'bool',
        'translations_disabled' => 'bool',
        'tl_id' => 'int',
        'about' => 'string',
        'participants' => 'string',
        'chat_photo' => 'string',
        'notify_settings' => 'string',
        'exported_invite' => 'string',
        'pinned_msg_id' => 'int',
        'folder_id' => 'int',
        'call' => 'string',
        'ttl_period' => 'int',
        'groupcall_default_join_as' => 'string',
        'theme_emoticon' => 'string',
        'requests_pending' => 'int',
        'available_reactions' => 'string',
        'reactions_limit' => 'int',
    ];

    public function botInfo(): HasMany
    {
        return $this->tlChild(TlChatFullChatFullBot_info::class);
    }
    public function recentRequesters(): HasMany
    {
        return $this->tlChild(TlChatFullChatFullRecent_requesters::class);
    }
}

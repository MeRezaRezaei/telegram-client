<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatlistsChatlistUpdatesChatlistUpdatesMissing_peers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatlistsChatlistUpdatesChatlistUpdatesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatlistsChatlistUpdatesChatlistUpdatesUsers;

/** Constructor model for chatlists.chatlistUpdates of chatlists.ChatlistUpdates (crc32 93bd878d). */
final class TlChatlistsChatlistUpdatesChatlistUpdates extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chatlists_chatlist_updates_chatlist_updates';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function missingPeers(): HasMany
    {
        return $this->tlChild(TlChatlistsChatlistUpdatesChatlistUpdatesMissing_peers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlChatlistsChatlistUpdatesChatlistUpdatesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlChatlistsChatlistUpdatesChatlistUpdatesUsers::class);
    }
}

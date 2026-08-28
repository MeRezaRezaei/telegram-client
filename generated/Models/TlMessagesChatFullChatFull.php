<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatFullChatFullChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatFullChatFullUsers;

/** Constructor model for messages.chatFull of messages.ChatFull (crc32 e5d7d19c). */
final class TlMessagesChatFullChatFull extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_chat_full_chat_full';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'full_chat' => 'string',
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesChatFullChatFullChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesChatFullChatFullUsers::class);
    }
}

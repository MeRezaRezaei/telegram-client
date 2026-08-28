<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesInactiveChatsInactiveChatsDates;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesInactiveChatsInactiveChatsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesInactiveChatsInactiveChatsUsers;

/** Constructor model for messages.inactiveChats of messages.InactiveChats (crc32 a927fec5). */
final class TlMessagesInactiveChatsInactiveChats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_inactive_chats_inactive_chats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function dates(): HasMany
    {
        return $this->tlChild(TlMessagesInactiveChatsInactiveChatsDates::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesInactiveChatsInactiveChatsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesInactiveChatsInactiveChatsUsers::class);
    }
}

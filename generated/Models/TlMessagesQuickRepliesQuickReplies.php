<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesQuickRepliesQuickRepliesQuick_replies;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesQuickRepliesQuickRepliesMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesQuickRepliesQuickRepliesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesQuickRepliesQuickRepliesUsers;

/** Constructor model for messages.quickReplies of messages.QuickReplies (crc32 c68d6695). */
final class TlMessagesQuickRepliesQuickReplies extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_quick_replies_quick_replies';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function quickReplies(): HasMany
    {
        return $this->tlChild(TlMessagesQuickRepliesQuickRepliesQuick_replies::class);
    }
    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesQuickRepliesQuickRepliesMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesQuickRepliesQuickRepliesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesQuickRepliesQuickRepliesUsers::class);
    }
}

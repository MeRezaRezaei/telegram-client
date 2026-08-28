<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageViewsMessageViewsViews;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageViewsMessageViewsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageViewsMessageViewsUsers;

/** Constructor model for messages.messageViews of messages.MessageViews (crc32 b6c4f543). */
final class TlMessagesMessageViewsMessageViews extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_message_views_message_views';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function views(): HasMany
    {
        return $this->tlChild(TlMessagesMessageViewsMessageViewsViews::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesMessageViewsMessageViewsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesMessageViewsMessageViewsUsers::class);
    }
}

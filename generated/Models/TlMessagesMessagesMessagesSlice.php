<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSliceMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSliceTopics;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSliceChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSliceUsers;

/** Constructor model for messages.messagesSlice of messages.Messages (crc32 5f206716). */
final class TlMessagesMessagesMessagesSlice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_messages_messages_slice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'inexact' => 'bool',
        'count' => 'int',
        'next_rate' => 'int',
        'offset_id_offset' => 'int',
        'search_flood' => 'string',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesSliceMessages::class);
    }
    public function topics(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesSliceTopics::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesSliceChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesSliceUsers::class);
    }
}

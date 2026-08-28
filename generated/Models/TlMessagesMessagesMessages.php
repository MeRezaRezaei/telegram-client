<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesTopics;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesUsers;

/** Constructor model for messages.messages of messages.Messages (crc32 1d73e7ea). */
final class TlMessagesMessagesMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_messages_messages';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesMessages::class);
    }
    public function topics(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesTopics::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesMessagesMessagesUsers::class);
    }
}

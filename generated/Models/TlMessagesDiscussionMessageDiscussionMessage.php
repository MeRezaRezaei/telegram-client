<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDiscussionMessageDiscussionMessageMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDiscussionMessageDiscussionMessageChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDiscussionMessageDiscussionMessageUsers;

/** Constructor model for messages.discussionMessage of messages.DiscussionMessage (crc32 a6341782). */
final class TlMessagesDiscussionMessageDiscussionMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_discussion_message_discussion_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'max_id' => 'int',
        'read_inbox_max_id' => 'int',
        'read_outbox_max_id' => 'int',
        'unread_count' => 'int',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesDiscussionMessageDiscussionMessageMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesDiscussionMessageDiscussionMessageChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesDiscussionMessageDiscussionMessageUsers::class);
    }
}

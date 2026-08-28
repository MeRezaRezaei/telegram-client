<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSponsoredMessagesSponsoredMessagesMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSponsoredMessagesSponsoredMessagesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSponsoredMessagesSponsoredMessagesUsers;

/** Constructor model for messages.sponsoredMessages of messages.SponsoredMessages (crc32 ffda656d). */
final class TlMessagesSponsoredMessagesSponsoredMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_sponsored_messages_sponsored_messages';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'posts_between' => 'int',
        'start_delay' => 'int',
        'between_delay' => 'int',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesSponsoredMessagesSponsoredMessagesMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesSponsoredMessagesSponsoredMessagesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesSponsoredMessagesSponsoredMessagesUsers::class);
    }
}

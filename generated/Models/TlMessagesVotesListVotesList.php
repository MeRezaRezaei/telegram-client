<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesVotesListVotesListVotes;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesVotesListVotesListChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesVotesListVotesListUsers;

/** Constructor model for messages.votesList of messages.VotesList (crc32 4899484e). */
final class TlMessagesVotesListVotesList extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_votes_list_votes_list';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
    ];

    public function votes(): HasMany
    {
        return $this->tlChild(TlMessagesVotesListVotesListVotes::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesVotesListVotesListChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesVotesListVotesListUsers::class);
    }
}

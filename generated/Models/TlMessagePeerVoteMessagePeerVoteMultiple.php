<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagePeerVoteMessagePeerVoteMultipleOptions;

/** Constructor model for messagePeerVoteMultiple of MessagePeerVote (crc32 4628f6e6). */
final class TlMessagePeerVoteMessagePeerVoteMultiple extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_peer_vote_message_peer_vote_multiple';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'date' => 'int',
    ];

    public function options(): HasMany
    {
        return $this->tlChild(TlMessagePeerVoteMessagePeerVoteMultipleOptions::class);
    }
}

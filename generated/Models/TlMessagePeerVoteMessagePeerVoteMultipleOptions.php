<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param options (table tl_message_peer_vote_message_peer_vote_multiple__options). */
final class TlMessagePeerVoteMessagePeerVoteMultipleOptions extends TlAnchorModel
{
    protected $table = 'tl_message_peer_vote_message_peer_vote_multiple__options';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

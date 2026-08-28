<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param participants (table tl_chat_participants_chat_participants__participants). */
final class TlChatParticipantsChatParticipantsParticipants extends TlAnchorModel
{
    protected $table = 'tl_chat_participants_chat_participants__participants';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

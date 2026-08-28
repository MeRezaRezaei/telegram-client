<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param reactions (table tl_chat_reactions_chat_reactions_some__reactions). */
final class TlChatReactionsChatReactionsSomeReactions extends TlAnchorModel
{
    protected $table = 'tl_chat_reactions_chat_reactions_some__reactions';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

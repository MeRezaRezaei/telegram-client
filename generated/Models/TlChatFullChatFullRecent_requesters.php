<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param recent_requesters (table tl_chat_full_chat_full__recent_requesters). */
final class TlChatFullChatFullRecent_requesters extends TlAnchorModel
{
    protected $table = 'tl_chat_full_chat_full__recent_requesters';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

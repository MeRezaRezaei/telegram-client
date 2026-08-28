<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param recent_requesters (table tl_chat_full_channel_full__recent_requesters). */
final class TlChatFullChannelFullRecent_requesters extends TlAnchorModel
{
    protected $table = 'tl_chat_full_channel_full__recent_requesters';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

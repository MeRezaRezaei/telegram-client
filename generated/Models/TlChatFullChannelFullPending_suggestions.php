<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param pending_suggestions (table tl_chat_full_channel_full__pending_suggestions). */
final class TlChatFullChannelFullPending_suggestions extends TlAnchorModel
{
    protected $table = 'tl_chat_full_channel_full__pending_suggestions';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

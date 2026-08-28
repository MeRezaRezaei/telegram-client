<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param options (table tl_update_update_message_poll_vote__options). */
final class TlUpdateUpdateMessagePollVoteOptions extends TlAnchorModel
{
    protected $table = 'tl_update_update_message_poll_vote__options';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

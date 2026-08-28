<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param messages (table tl_update_update_read_messages_contents__messages). */
final class TlUpdateUpdateReadMessagesContentsMessages extends TlAnchorModel
{
    protected $table = 'tl_update_update_read_messages_contents__messages';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

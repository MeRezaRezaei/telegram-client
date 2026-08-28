<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param recent_repliers (table tl_message_replies_message_replies__recent_repliers). */
final class TlMessageRepliesMessageRepliesRecent_repliers extends TlAnchorModel
{
    protected $table = 'tl_message_replies_message_replies__recent_repliers';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

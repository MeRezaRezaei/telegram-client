<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param quote_entities (table tl_input_reply_to_input_reply_to_message__quote_entities). */
final class TlInputReplyToInputReplyToMessageQuote_entities extends TlAnchorModel
{
    protected $table = 'tl_input_reply_to_input_reply_to_message__quote_entities';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

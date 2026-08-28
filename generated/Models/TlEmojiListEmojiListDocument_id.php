<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param document_id (table tl_emoji_list_emoji_list__document_id). */
final class TlEmojiListEmojiListDocument_id extends TlAnchorModel
{
    protected $table = 'tl_emoji_list_emoji_list__document_id';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

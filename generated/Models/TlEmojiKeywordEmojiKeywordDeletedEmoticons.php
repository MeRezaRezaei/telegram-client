<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param emoticons (table tl_emoji_keyword_emoji_keyword_deleted__emoticons). */
final class TlEmojiKeywordEmojiKeywordDeletedEmoticons extends TlAnchorModel
{
    protected $table = 'tl_emoji_keyword_emoji_keyword_deleted__emoticons';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

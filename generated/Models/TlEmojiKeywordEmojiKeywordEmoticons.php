<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param emoticons (table tl_emoji_keyword_emoji_keyword__emoticons). */
final class TlEmojiKeywordEmojiKeywordEmoticons extends TlAnchorModel
{
    protected $table = 'tl_emoji_keyword_emoji_keyword__emoticons';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

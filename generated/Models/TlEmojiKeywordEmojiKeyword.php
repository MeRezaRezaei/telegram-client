<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmojiKeywordEmojiKeywordEmoticons;

/** Constructor model for emojiKeyword of EmojiKeyword (crc32 d5b3b9f9). */
final class TlEmojiKeywordEmojiKeyword extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_emoji_keyword_emoji_keyword';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'keyword' => 'string',
    ];

    public function emoticons(): HasMany
    {
        return $this->tlChild(TlEmojiKeywordEmojiKeywordEmoticons::class);
    }
}

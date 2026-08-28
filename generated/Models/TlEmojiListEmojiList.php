<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmojiListEmojiListDocument_id;

/** Constructor model for emojiList of EmojiList (crc32 7a1e11d1). */
final class TlEmojiListEmojiList extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_emoji_list_emoji_list';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function documentId(): HasMany
    {
        return $this->tlChild(TlEmojiListEmojiListDocument_id::class);
    }
}

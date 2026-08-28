<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlVideoSizeVideoSizeEmojiMarkupBackground_colors;

/** Constructor model for videoSizeEmojiMarkup of VideoSize (crc32 f85c413c). */
final class TlVideoSizeVideoSizeEmojiMarkup extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_video_size_video_size_emoji_markup';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'emoji_id' => 'int',
    ];

    public function backgroundColors(): HasMany
    {
        return $this->tlChild(TlVideoSizeVideoSizeEmojiMarkupBackground_colors::class);
    }
}

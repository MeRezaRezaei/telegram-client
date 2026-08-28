<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param unread (table tl_messages_featured_stickers_featured_stickers__unread). */
final class TlMessagesFeaturedStickersFeaturedStickersUnread extends TlAnchorModel
{
    protected $table = 'tl_messages_featured_stickers_featured_stickers__unread';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

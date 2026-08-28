<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param packs (table tl_messages_recent_stickers_recent_stickers__packs). */
final class TlMessagesRecentStickersRecentStickersPacks extends TlAnchorModel
{
    protected $table = 'tl_messages_recent_stickers_recent_stickers__packs';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

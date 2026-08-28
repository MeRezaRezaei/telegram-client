<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param keywords (table tl_messages_sticker_set_sticker_set__keywords). */
final class TlMessagesStickerSetStickerSetKeywords extends TlAnchorModel
{
    protected $table = 'tl_messages_sticker_set_sticker_set__keywords';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

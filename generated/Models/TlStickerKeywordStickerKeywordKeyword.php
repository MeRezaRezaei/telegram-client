<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param keyword (table tl_sticker_keyword_sticker_keyword__keyword). */
final class TlStickerKeywordStickerKeywordKeyword extends TlAnchorModel
{
    protected $table = 'tl_sticker_keyword_sticker_keyword__keyword';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

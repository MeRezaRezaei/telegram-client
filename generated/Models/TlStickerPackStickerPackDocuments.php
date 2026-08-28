<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param documents (table tl_sticker_pack_sticker_pack__documents). */
final class TlStickerPackStickerPackDocuments extends TlAnchorModel
{
    protected $table = 'tl_sticker_pack_sticker_pack__documents';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

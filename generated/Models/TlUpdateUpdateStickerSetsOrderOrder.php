<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param order (table tl_update_update_sticker_sets_order__order). */
final class TlUpdateUpdateStickerSetsOrderOrder extends TlAnchorModel
{
    protected $table = 'tl_update_update_sticker_sets_order__order';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

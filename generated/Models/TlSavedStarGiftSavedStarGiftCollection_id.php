<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param collection_id (table tl_saved_star_gift_saved_star_gift__collection_id). */
final class TlSavedStarGiftSavedStarGiftCollection_id extends TlAnchorModel
{
    protected $table = 'tl_saved_star_gift_saved_star_gift__collection_id';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

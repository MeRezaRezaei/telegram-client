<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param blocks (table tl_page_block_page_block_details__blocks). */
final class TlPageBlockPageBlockDetailsBlocks extends TlAnchorModel
{
    protected $table = 'tl_page_block_page_block_details__blocks';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

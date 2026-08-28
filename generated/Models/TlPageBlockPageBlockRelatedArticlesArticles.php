<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param articles (table tl_page_block_page_block_related_articles__articles). */
final class TlPageBlockPageBlockRelatedArticlesArticles extends TlAnchorModel
{
    protected $table = 'tl_page_block_page_block_related_articles__articles';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

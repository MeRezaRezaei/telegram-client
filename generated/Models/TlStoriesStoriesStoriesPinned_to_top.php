<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param pinned_to_top (table tl_stories_stories_stories__pinned_to_top). */
final class TlStoriesStoriesStoriesPinned_to_top extends TlAnchorModel
{
    protected $table = 'tl_stories_stories_stories__pinned_to_top';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

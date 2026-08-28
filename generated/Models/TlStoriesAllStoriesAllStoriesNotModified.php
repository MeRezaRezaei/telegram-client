<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for stories.allStoriesNotModified of stories.AllStories (crc32 1158fe3e). */
final class TlStoriesAllStoriesAllStoriesNotModified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stories_all_stories_all_stories_not_modified';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'state' => 'string',
        'stealth_mode' => 'string',
    ];
}

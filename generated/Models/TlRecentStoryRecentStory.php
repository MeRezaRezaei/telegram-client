<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for recentStory of RecentStory (crc32 711d692d). */
final class TlRecentStoryRecentStory extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_recent_story_recent_story';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'live' => 'bool',
        'max_id' => 'int',
    ];
}

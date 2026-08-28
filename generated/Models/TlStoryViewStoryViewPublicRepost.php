<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for storyViewPublicRepost of StoryView (crc32 bd74cf49). */
final class TlStoryViewStoryViewPublicRepost extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_story_view_story_view_public_repost';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'blocked' => 'bool',
        'blocked_my_stories_from' => 'bool',
        'peer_id' => 'string',
        'story' => 'string',
    ];
}

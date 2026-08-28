<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewsStoryViewsReactions;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewsStoryViewsRecent_viewers;

/** Constructor model for storyViews of StoryViews (crc32 8d595cd6). */
final class TlStoryViewsStoryViews extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_story_views_story_views';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'has_viewers' => 'bool',
        'views_count' => 'int',
        'forwards_count' => 'int',
        'reactions_count' => 'int',
    ];

    public function reactions(): HasMany
    {
        return $this->tlChild(TlStoryViewsStoryViewsReactions::class);
    }
    public function recentViewers(): HasMany
    {
        return $this->tlChild(TlStoryViewsStoryViewsRecent_viewers::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesFoundStoriesFoundStoriesStories;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesFoundStoriesFoundStoriesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesFoundStoriesFoundStoriesUsers;

/** Constructor model for stories.foundStories of stories.FoundStories (crc32 e2de7737). */
final class TlStoriesFoundStoriesFoundStories extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stories_found_stories_found_stories';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
    ];

    public function stories(): HasMany
    {
        return $this->tlChild(TlStoriesFoundStoriesFoundStoriesStories::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlStoriesFoundStoriesFoundStoriesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlStoriesFoundStoriesFoundStoriesUsers::class);
    }
}

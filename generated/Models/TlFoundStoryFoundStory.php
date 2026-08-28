<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for foundStory of FoundStory (crc32 e87acbc0). */
final class TlFoundStoryFoundStory extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_found_story_found_story';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'story' => 'string',
    ];
}

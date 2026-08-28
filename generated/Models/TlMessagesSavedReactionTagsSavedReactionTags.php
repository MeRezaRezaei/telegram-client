<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedReactionTagsSavedReactionTagsTags;

/** Constructor model for messages.savedReactionTags of messages.SavedReactionTags (crc32 3259950a). */
final class TlMessagesSavedReactionTagsSavedReactionTags extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_saved_reaction_tags_saved_reaction_tags';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function tags(): HasMany
    {
        return $this->tlChild(TlMessagesSavedReactionTagsSavedReactionTagsTags::class);
    }
}

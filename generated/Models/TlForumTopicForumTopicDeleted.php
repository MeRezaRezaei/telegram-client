<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for forumTopicDeleted of ForumTopic (crc32 023f109b). */
final class TlForumTopicForumTopicDeleted extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_forum_topic_forum_topic_deleted';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
    ];
}

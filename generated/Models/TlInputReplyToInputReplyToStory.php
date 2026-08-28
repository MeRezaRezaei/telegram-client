<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputReplyToStory of InputReplyTo (crc32 5881323a). */
final class TlInputReplyToInputReplyToStory extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_reply_to_input_reply_to_story';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'story_id' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputMediaStory of InputMedia (crc32 89fdd778). */
final class TlInputMediaInputMediaStory extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_media_input_media_story';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'tl_id' => 'int',
    ];
}

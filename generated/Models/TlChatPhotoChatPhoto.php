<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatPhoto of ChatPhoto (crc32 1c6e1c11). */
final class TlChatPhotoChatPhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_photo_chat_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'has_video' => 'bool',
        'photo_id' => 'int',
        'stripped_thumb' => 'string',
        'dc_id' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputChatPhotoEmpty of InputChatPhoto (crc32 1ca48f57). */
final class TlInputChatPhotoInputChatPhotoEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_chat_photo_input_chat_photo_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

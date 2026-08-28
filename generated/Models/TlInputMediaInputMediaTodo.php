<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputMediaTodo of InputMedia (crc32 9fc55fde). */
final class TlInputMediaInputMediaTodo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_media_input_media_todo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'todo' => 'string',
    ];
}

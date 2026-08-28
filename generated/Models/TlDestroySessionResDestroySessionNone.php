<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for destroy_session_none of DestroySessionRes (crc32 62d350c9). */
final class TlDestroySessionResDestroySessionNone extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_destroy_session_res_destroy_session_none';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'session_id' => 'int',
    ];
}

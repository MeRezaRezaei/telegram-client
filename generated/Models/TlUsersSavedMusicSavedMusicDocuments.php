<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param documents (table tl_users_saved_music_saved_music__documents). */
final class TlUsersSavedMusicSavedMusicDocuments extends TlAnchorModel
{
    protected $table = 'tl_users_saved_music_saved_music__documents';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

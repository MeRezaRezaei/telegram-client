<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param ids (table tl_account_saved_music_ids_saved_music_ids__ids). */
final class TlAccountSavedMusicIdsSavedMusicIdsIds extends TlAnchorModel
{
    protected $table = 'tl_account_saved_music_ids_saved_music_ids__ids';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

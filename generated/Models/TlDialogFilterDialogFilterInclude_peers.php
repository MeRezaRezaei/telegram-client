<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param include_peers (table tl_dialog_filter_dialog_filter__include_peers). */
final class TlDialogFilterDialogFilterInclude_peers extends TlAnchorModel
{
    protected $table = 'tl_dialog_filter_dialog_filter__include_peers';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

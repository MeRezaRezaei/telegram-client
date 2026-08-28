<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param timezones (table tl_help_timezones_list_timezones_list__timezones). */
final class TlHelpTimezonesListTimezonesListTimezones extends TlAnchorModel
{
    protected $table = 'tl_help_timezones_list_timezones_list__timezones';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

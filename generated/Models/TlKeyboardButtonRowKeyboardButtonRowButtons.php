<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param buttons (table tl_keyboard_button_row_keyboard_button_row__buttons). */
final class TlKeyboardButtonRowKeyboardButtonRowButtons extends TlAnchorModel
{
    protected $table = 'tl_keyboard_button_row_keyboard_button_row__buttons';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

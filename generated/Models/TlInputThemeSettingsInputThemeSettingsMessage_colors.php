<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param message_colors (table tl_input_theme_settings_input_theme_settings__a1d0879fb3ca). */
final class TlInputThemeSettingsInputThemeSettingsMessage_colors extends TlAnchorModel
{
    protected $table = 'tl_input_theme_settings_input_theme_settings__a1d0879fb3ca';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputThemeSettingsInputThemeSettingsMessage_colors;

/** Constructor model for inputThemeSettings of InputThemeSettings (crc32 8fde504f). */
final class TlInputThemeSettingsInputThemeSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_theme_settings_input_theme_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'message_colors_animated' => 'bool',
        'base_theme' => 'string',
        'accent_color' => 'int',
        'outbox_accent_color' => 'int',
        'wallpaper' => 'string',
        'wallpaper_settings' => 'string',
    ];

    public function messageColors(): HasMany
    {
        return $this->tlChild(TlInputThemeSettingsInputThemeSettingsMessage_colors::class);
    }
}

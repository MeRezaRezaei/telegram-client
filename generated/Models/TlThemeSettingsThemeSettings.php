<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlThemeSettingsThemeSettingsMessage_colors;

/** Constructor model for themeSettings of ThemeSettings (crc32 fa58b6d4). */
final class TlThemeSettingsThemeSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_theme_settings_theme_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'message_colors_animated' => 'bool',
        'base_theme' => 'string',
        'accent_color' => 'int',
        'outbox_accent_color' => 'int',
        'wallpaper' => 'string',
    ];

    public function messageColors(): HasMany
    {
        return $this->tlChild(TlThemeSettingsThemeSettingsMessage_colors::class);
    }
}

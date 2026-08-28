<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param theme_settings (table tl_chat_theme_chat_theme_unique_gift__theme_settings). */
final class TlChatThemeChatThemeUniqueGiftTheme_settings extends TlAnchorModel
{
    protected $table = 'tl_chat_theme_chat_theme_unique_gift__theme_settings';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

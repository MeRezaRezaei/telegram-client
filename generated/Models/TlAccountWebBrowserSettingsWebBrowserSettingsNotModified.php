<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for account.webBrowserSettingsNotModified of account.WebBrowserSettings (crc32 c31c8f4e). */
final class TlAccountWebBrowserSettingsWebBrowserSettingsNotModified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_web_browser_settings_web_browser_s_2e6cc2129fbc';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

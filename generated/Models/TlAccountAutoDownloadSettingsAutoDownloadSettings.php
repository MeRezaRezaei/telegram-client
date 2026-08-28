<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for account.autoDownloadSettings of account.AutoDownloadSettings (crc32 63cacf26). */
final class TlAccountAutoDownloadSettingsAutoDownloadSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_auto_download_settings_auto_download_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'low' => 'string',
        'medium' => 'string',
        'high' => 'string',
    ];
}

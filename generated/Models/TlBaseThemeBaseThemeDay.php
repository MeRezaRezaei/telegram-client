<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for baseThemeDay of BaseTheme (crc32 fbd81688). */
final class TlBaseThemeBaseThemeDay extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_base_theme_base_theme_day';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

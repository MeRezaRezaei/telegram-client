<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for baseThemeNight of BaseTheme (crc32 b7b31ea8). */
final class TlBaseThemeBaseThemeNight extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_base_theme_base_theme_night';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

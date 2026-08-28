<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountThemesThemesThemes;

/** Constructor model for account.themes of account.Themes (crc32 9a3d8c6d). */
final class TlAccountThemesThemes extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_themes_themes';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function themes(): HasMany
    {
        return $this->tlChild(TlAccountThemesThemesThemes::class);
    }
}

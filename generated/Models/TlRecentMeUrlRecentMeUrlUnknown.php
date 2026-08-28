<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for recentMeUrlUnknown of RecentMeUrl (crc32 46e1d13d). */
final class TlRecentMeUrlRecentMeUrlUnknown extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_recent_me_url_recent_me_url_unknown';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
    ];
}

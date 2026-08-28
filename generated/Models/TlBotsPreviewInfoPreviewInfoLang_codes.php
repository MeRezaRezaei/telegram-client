<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param lang_codes (table tl_bots_preview_info_preview_info__lang_codes). */
final class TlBotsPreviewInfoPreviewInfoLang_codes extends TlAnchorModel
{
    protected $table = 'tl_bots_preview_info_preview_info__lang_codes';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

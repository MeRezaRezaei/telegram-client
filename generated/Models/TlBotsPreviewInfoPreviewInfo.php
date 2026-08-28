<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsPreviewInfoPreviewInfoMedia;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsPreviewInfoPreviewInfoLang_codes;

/** Constructor model for bots.previewInfo of bots.PreviewInfo (crc32 0ca71d64). */
final class TlBotsPreviewInfoPreviewInfo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bots_preview_info_preview_info';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function media(): HasMany
    {
        return $this->tlChild(TlBotsPreviewInfoPreviewInfoMedia::class);
    }
    public function langCodes(): HasMany
    {
        return $this->tlChild(TlBotsPreviewInfoPreviewInfoLang_codes::class);
    }
}

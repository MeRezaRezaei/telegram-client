<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStickerKeywordStickerKeywordKeyword;

/** Constructor model for stickerKeyword of StickerKeyword (crc32 fcfeb29c). */
final class TlStickerKeywordStickerKeyword extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_sticker_keyword_sticker_keyword';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'document_id' => 'int',
    ];

    public function keyword(): HasMany
    {
        return $this->tlChild(TlStickerKeywordStickerKeywordKeyword::class);
    }
}

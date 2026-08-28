<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebPageAttributeWebPageAttributeStickerSetStickers;

/** Constructor model for webPageAttributeStickerSet of WebPageAttribute (crc32 50cc03d3). */
final class TlWebPageAttributeWebPageAttributeStickerSet extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_web_page_attribute_web_page_attribute_sticker_set';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'emojis' => 'bool',
        'text_color' => 'bool',
    ];

    public function stickers(): HasMany
    {
        return $this->tlChild(TlWebPageAttributeWebPageAttributeStickerSetStickers::class);
    }
}

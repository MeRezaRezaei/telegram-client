<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFeaturedStickersFeaturedStickersSets;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFeaturedStickersFeaturedStickersUnread;

/** Constructor model for messages.featuredStickers of messages.FeaturedStickers (crc32 be382906). */
final class TlMessagesFeaturedStickersFeaturedStickers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_featured_stickers_featured_stickers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'premium' => 'bool',
        'hash' => 'int',
        'count' => 'int',
    ];

    public function sets(): HasMany
    {
        return $this->tlChild(TlMessagesFeaturedStickersFeaturedStickersSets::class);
    }
    public function unread(): HasMany
    {
        return $this->tlChild(TlMessagesFeaturedStickersFeaturedStickersUnread::class);
    }
}

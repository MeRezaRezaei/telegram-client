<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFavedStickersFavedStickersPacks;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFavedStickersFavedStickersStickers;

/** Constructor model for messages.favedStickers of messages.FavedStickers (crc32 2cb51097). */
final class TlMessagesFavedStickersFavedStickers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_faved_stickers_faved_stickers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function packs(): HasMany
    {
        return $this->tlChild(TlMessagesFavedStickersFavedStickersPacks::class);
    }
    public function stickers(): HasMany
    {
        return $this->tlChild(TlMessagesFavedStickersFavedStickersStickers::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesAllStickersAllStickersSets;

/** Constructor model for messages.allStickers of messages.AllStickers (crc32 cdbbcebb). */
final class TlMessagesAllStickersAllStickers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_all_stickers_all_stickers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function sets(): HasMany
    {
        return $this->tlChild(TlMessagesAllStickersAllStickersSets::class);
    }
}

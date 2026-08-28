<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFoundStickersFoundStickersStickers;

/** Constructor model for messages.foundStickers of messages.FoundStickers (crc32 82c9e290). */
final class TlMessagesFoundStickersFoundStickers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_found_stickers_found_stickers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'next_offset' => 'int',
        'hash' => 'int',
    ];

    public function stickers(): HasMany
    {
        return $this->tlChild(TlMessagesFoundStickersFoundStickersStickers::class);
    }
}

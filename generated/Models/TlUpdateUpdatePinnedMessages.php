<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePinnedMessagesMessages;

/** Constructor model for updatePinnedMessages of Update (crc32 ed85eab5). */
final class TlUpdateUpdatePinnedMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_pinned_messages';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'pinned' => 'bool',
        'peer' => 'string',
        'pts' => 'int',
        'pts_count' => 'int',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlUpdateUpdatePinnedMessagesMessages::class);
    }
}

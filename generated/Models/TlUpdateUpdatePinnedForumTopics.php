<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePinnedForumTopicsOrder;

/** Constructor model for updatePinnedForumTopics of Update (crc32 def143d0). */
final class TlUpdateUpdatePinnedForumTopics extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_pinned_forum_topics';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'peer' => 'string',
    ];

    public function order(): HasMany
    {
        return $this->tlChild(TlUpdateUpdatePinnedForumTopicsOrder::class);
    }
}

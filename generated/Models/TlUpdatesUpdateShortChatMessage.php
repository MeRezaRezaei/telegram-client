<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortChatMessageEntities;

/** Constructor model for updateShortChatMessage of Updates (crc32 4d6deea5). */
final class TlUpdatesUpdateShortChatMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_update_short_chat_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'out' => 'bool',
        'mentioned' => 'bool',
        'media_unread' => 'bool',
        'silent' => 'bool',
        'tl_id' => 'int',
        'from_id' => 'int',
        'chat_id' => 'int',
        'message' => 'string',
        'pts' => 'int',
        'pts_count' => 'int',
        'date' => 'int',
        'fwd_from' => 'string',
        'via_bot_id' => 'int',
        'reply_to' => 'string',
        'ttl_period' => 'int',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdateShortChatMessageEntities::class);
    }
}

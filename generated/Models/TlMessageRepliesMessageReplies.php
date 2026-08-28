<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageRepliesMessageRepliesRecent_repliers;

/** Constructor model for messageReplies of MessageReplies (crc32 83d60fc2). */
final class TlMessageRepliesMessageReplies extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_replies_message_replies';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'comments' => 'bool',
        'replies' => 'int',
        'replies_pts' => 'int',
        'channel_id' => 'int',
        'max_id' => 'int',
        'read_max_id' => 'int',
    ];

    public function recentRepliers(): HasMany
    {
        return $this->tlChild(TlMessageRepliesMessageRepliesRecent_repliers::class);
    }
}

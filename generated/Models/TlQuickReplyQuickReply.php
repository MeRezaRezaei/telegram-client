<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for quickReply of QuickReply (crc32 0697102b). */
final class TlQuickReplyQuickReply extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_quick_reply_quick_reply';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'shortcut_id' => 'int',
        'shortcut' => 'string',
        'top_message' => 'int',
        'count' => 'int',
    ];
}

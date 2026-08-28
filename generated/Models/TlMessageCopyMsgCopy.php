<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for msg_copy of MessageCopy (crc32 e06046b2). */
final class TlMessageCopyMsgCopy extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_copy_msg_copy';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'orig_message' => 'string',
    ];
}

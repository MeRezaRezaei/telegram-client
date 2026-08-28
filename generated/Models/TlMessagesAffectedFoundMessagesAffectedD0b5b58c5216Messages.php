<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param messages (table tl_messages_affected_found_messages_affected__84127c85d979). */
final class TlMessagesAffectedFoundMessagesAffectedD0b5b58c5216Messages extends TlAnchorModel
{
    protected $table = 'tl_messages_affected_found_messages_affected__84127c85d979';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

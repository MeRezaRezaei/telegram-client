<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param users (table tl_message_action_message_action_chat_create__users). */
final class TlMessageActionMessageActionChatCreateUsers extends TlAnchorModel
{
    protected $table = 'tl_message_action_message_action_chat_create__users';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

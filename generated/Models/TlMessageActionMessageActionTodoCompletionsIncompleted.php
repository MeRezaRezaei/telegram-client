<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param incompleted (table tl_message_action_message_action_todo_complet_433c02fd34cb). */
final class TlMessageActionMessageActionTodoCompletionsIncompleted extends TlAnchorModel
{
    protected $table = 'tl_message_action_message_action_todo_complet_433c02fd34cb';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

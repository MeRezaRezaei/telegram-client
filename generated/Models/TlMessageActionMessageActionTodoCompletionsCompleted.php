<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param completed (table tl_message_action_message_action_todo_complet_c19fe03faa93). */
final class TlMessageActionMessageActionTodoCompletionsCompleted extends TlAnchorModel
{
    protected $table = 'tl_message_action_message_action_todo_complet_c19fe03faa93';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

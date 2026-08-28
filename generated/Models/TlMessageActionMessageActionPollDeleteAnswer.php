<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionPollDeleteAnswer of MessageAction (crc32 399674dc). */
final class TlMessageActionMessageActionPollDeleteAnswer extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_poll_delete_answer';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'answer' => 'string',
    ];
}

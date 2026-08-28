<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionSuggestBirthday of MessageAction (crc32 2c8f2a25). */
final class TlMessageActionMessageActionSuggestBirthday extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_suggest_birthday';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'birthday' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for businessGreetingMessage of BusinessGreetingMessage (crc32 e519abab). */
final class TlBusinessGreetingMessageBusinessGreetingMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_business_greeting_message_business_greeting_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'shortcut_id' => 'int',
        'recipients' => 'string',
        'no_activity_days' => 'int',
    ];
}

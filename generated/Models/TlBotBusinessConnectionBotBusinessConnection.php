<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for botBusinessConnection of BotBusinessConnection (crc32 8f34b2f5). */
final class TlBotBusinessConnectionBotBusinessConnection extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bot_business_connection_bot_business_connection';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'disabled' => 'bool',
        'connection_id' => 'string',
        'user_id' => 'int',
        'dc_id' => 'int',
        'date' => 'int',
        'rights' => 'string',
    ];
}

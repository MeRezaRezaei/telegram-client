<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputBotInlineMessageMediaVenue of InputBotInlineMessage (crc32 417bbf11). */
final class TlInputBotInlineMessageInputBotInlineMessageMediaVenue extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_bot_inline_message_input_bot_inline__0989e669c58b';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'geo_point' => 'string',
        'title' => 'string',
        'address' => 'string',
        'provider' => 'string',
        'venue_id' => 'string',
        'venue_type' => 'string',
        'reply_markup' => 'string',
    ];
}

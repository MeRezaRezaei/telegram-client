<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputBotInlineResultPhoto of InputBotInlineResult (crc32 a8d864a7). */
final class TlInputBotInlineResultInputBotInlineResultPhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_bot_inline_result_input_bot_inline_result_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'string',
        'tl_type' => 'string',
        'photo' => 'string',
        'send_message' => 'string',
    ];
}

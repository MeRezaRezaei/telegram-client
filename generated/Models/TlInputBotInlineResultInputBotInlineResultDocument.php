<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputBotInlineResultDocument of InputBotInlineResult (crc32 fff8fdc4). */
final class TlInputBotInlineResultInputBotInlineResultDocument extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_bot_inline_result_input_bot_inline_r_ddd2d6c152ff';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tl_id' => 'string',
        'tl_type' => 'string',
        'title' => 'string',
        'description' => 'string',
        'document' => 'string',
        'send_message' => 'string',
    ];
}

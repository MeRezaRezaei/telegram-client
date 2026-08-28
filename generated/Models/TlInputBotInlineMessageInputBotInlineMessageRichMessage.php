<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputBotInlineMessageRichMessage of InputBotInlineMessage (crc32 b43df56c). */
final class TlInputBotInlineMessageInputBotInlineMessageRichMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_bot_inline_message_input_bot_inline__1df9ccfd35a3';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'reply_markup' => 'string',
        'rich_message' => 'string',
    ];
}

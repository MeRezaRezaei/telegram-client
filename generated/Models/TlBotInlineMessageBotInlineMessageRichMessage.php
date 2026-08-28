<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for botInlineMessageRichMessage of BotInlineMessage (crc32 0a617e7b). */
final class TlBotInlineMessageBotInlineMessageRichMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bot_inline_message_bot_inline_message_rich_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'reply_markup' => 'string',
        'rich_message' => 'string',
    ];
}

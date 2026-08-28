<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageTextEntities;

/** Constructor model for botInlineMessageText of BotInlineMessage (crc32 8c7f65e2). */
final class TlBotInlineMessageBotInlineMessageText extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bot_inline_message_bot_inline_message_text';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'no_webpage' => 'bool',
        'invert_media' => 'bool',
        'message' => 'string',
        'reply_markup' => 'string',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlBotInlineMessageBotInlineMessageTextEntities::class);
    }
}

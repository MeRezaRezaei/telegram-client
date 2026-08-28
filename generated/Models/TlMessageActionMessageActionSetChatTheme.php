<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionSetChatTheme of MessageAction (crc32 b91bbd3a). */
final class TlMessageActionMessageActionSetChatTheme extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_set_chat_theme';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'theme' => 'string',
    ];
}

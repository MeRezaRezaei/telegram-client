<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateBotChatInviteRequester of Update (crc32 7cb34d79). */
final class TlUpdateUpdateBotChatInviteRequester extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_bot_chat_invite_requester';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'peer' => 'string',
        'date' => 'int',
        'user_id' => 'int',
        'about' => 'string',
        'invite' => 'string',
        'qts' => 'int',
        'query_id' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatInviteJoinResultChatInviDacd8245b982Users;

/** Constructor model for messages.chatInviteJoinResultWebView of messages.ChatInviteJoinResult (crc32 2f51c337). */
final class TlMessagesChatInviteJoinResultChatInviteJoinResultWebView extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_chat_invite_join_result_chat_invi_dacd8245b982';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bot_id' => 'int',
        'webview' => 'string',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesChatInviteJoinResultChatInviDacd8245b982Users::class);
    }
}

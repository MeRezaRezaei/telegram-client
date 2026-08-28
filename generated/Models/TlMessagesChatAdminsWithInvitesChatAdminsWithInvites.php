<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatAdminsWithInvitesChatAdmF8ed6a6ff14eAdmins;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatAdminsWithInvitesChatAdmF8ed6a6ff14eUsers;

/** Constructor model for messages.chatAdminsWithInvites of messages.ChatAdminsWithInvites (crc32 b69b72d7). */
final class TlMessagesChatAdminsWithInvitesChatAdminsWithInvites extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_chat_admins_with_invites_chat_adm_f8ed6a6ff14e';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function admins(): HasMany
    {
        return $this->tlChild(TlMessagesChatAdminsWithInvitesChatAdmF8ed6a6ff14eAdmins::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesChatAdminsWithInvitesChatAdmF8ed6a6ff14eUsers::class);
    }
}

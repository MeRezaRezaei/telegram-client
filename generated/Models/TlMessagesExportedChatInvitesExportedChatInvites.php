<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesExportedChatInvitesExportedChatInvitesInvites;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesExportedChatInvitesExportedChatInvitesUsers;

/** Constructor model for messages.exportedChatInvites of messages.ExportedChatInvites (crc32 bdc62dcc). */
final class TlMessagesExportedChatInvitesExportedChatInvites extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_exported_chat_invites_exported_chat_invites';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
    ];

    public function invites(): HasMany
    {
        return $this->tlChild(TlMessagesExportedChatInvitesExportedChatInvitesInvites::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesExportedChatInvitesExportedChatInvitesUsers::class);
    }
}

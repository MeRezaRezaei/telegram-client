<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatInvitePublicJoinRequests of ExportedChatInvite (crc32 ed107ab7). */
final class TlExportedChatInviteChatInvitePublicJoinRequests extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_exported_chat_invite_chat_invite_public_join_requests';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

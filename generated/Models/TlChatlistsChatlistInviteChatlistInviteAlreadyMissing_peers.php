<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param missing_peers (table tl_chatlists_chatlist_invite_chatlist_invite__e88ac70d6871). */
final class TlChatlistsChatlistInviteChatlistInviteAlreadyMissing_peers extends TlAnchorModel
{
    protected $table = 'tl_chatlists_chatlist_invite_chatlist_invite__e88ac70d6871';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

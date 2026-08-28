<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlExportedChatlistInviteExportedChatlistInvitePeers;

/** Constructor model for exportedChatlistInvite of ExportedChatlistInvite (crc32 0c5181ac). */
final class TlExportedChatlistInviteExportedChatlistInvite extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_exported_chatlist_invite_exported_chatlist_invite';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'title' => 'string',
        'url' => 'string',
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlExportedChatlistInviteExportedChatlistInvitePeers::class);
    }
}

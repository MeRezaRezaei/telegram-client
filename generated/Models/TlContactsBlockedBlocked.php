<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedBlocked;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedUsers;

/** Constructor model for contacts.blocked of contacts.Blocked (crc32 0ade1591). */
final class TlContactsBlockedBlocked extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_blocked_blocked';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function blocked(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedBlocked::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedUsers::class);
    }
}

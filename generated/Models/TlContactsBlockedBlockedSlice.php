<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedSliceBlocked;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedSliceChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsBlockedBlockedSliceUsers;

/** Constructor model for contacts.blockedSlice of contacts.Blocked (crc32 e1664194). */
final class TlContactsBlockedBlockedSlice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_blocked_blocked_slice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
    ];

    public function blocked(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedSliceBlocked::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedSliceChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsBlockedBlockedSliceUsers::class);
    }
}

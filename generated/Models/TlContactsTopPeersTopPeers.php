<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsTopPeersTopPeersCategories;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsTopPeersTopPeersChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsTopPeersTopPeersUsers;

/** Constructor model for contacts.topPeers of contacts.TopPeers (crc32 70b772a8). */
final class TlContactsTopPeersTopPeers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_top_peers_top_peers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function categories(): HasMany
    {
        return $this->tlChild(TlContactsTopPeersTopPeersCategories::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlContactsTopPeersTopPeersChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsTopPeersTopPeersUsers::class);
    }
}

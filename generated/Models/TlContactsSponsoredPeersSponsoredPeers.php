<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsSponsoredPeersSponsoredPeersPeers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsSponsoredPeersSponsoredPeersChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsSponsoredPeersSponsoredPeersUsers;

/** Constructor model for contacts.sponsoredPeers of contacts.SponsoredPeers (crc32 eb032884). */
final class TlContactsSponsoredPeersSponsoredPeers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_sponsored_peers_sponsored_peers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlContactsSponsoredPeersSponsoredPeersPeers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlContactsSponsoredPeersSponsoredPeersChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsSponsoredPeersSponsoredPeersUsers::class);
    }
}

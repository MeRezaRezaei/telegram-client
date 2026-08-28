<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneJoinAsPeersJoinAsPeersPeers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneJoinAsPeersJoinAsPeersChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneJoinAsPeersJoinAsPeersUsers;

/** Constructor model for phone.joinAsPeers of phone.JoinAsPeers (crc32 afe5623f). */
final class TlPhoneJoinAsPeersJoinAsPeers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_phone_join_as_peers_join_as_peers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlPhoneJoinAsPeersJoinAsPeersPeers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPhoneJoinAsPeersJoinAsPeersChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPhoneJoinAsPeersJoinAsPeersUsers::class);
    }
}

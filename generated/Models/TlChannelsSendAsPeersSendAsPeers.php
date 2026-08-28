<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsSendAsPeersSendAsPeersPeers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsSendAsPeersSendAsPeersChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsSendAsPeersSendAsPeersUsers;

/** Constructor model for channels.sendAsPeers of channels.SendAsPeers (crc32 f496b0c6). */
final class TlChannelsSendAsPeersSendAsPeers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channels_send_as_peers_send_as_peers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlChannelsSendAsPeersSendAsPeersPeers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlChannelsSendAsPeersSendAsPeersChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlChannelsSendAsPeersSendAsPeersUsers::class);
    }
}

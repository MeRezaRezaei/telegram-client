<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param chats (table tl_channels_send_as_peers_send_as_peers__chats). */
final class TlChannelsSendAsPeersSendAsPeersChats extends TlAnchorModel
{
    protected $table = 'tl_channels_send_as_peers_send_as_peers__chats';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

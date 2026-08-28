<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for notifyBroadcasts of NotifyPeer (crc32 d612e8ef). */
final class TlNotifyPeerNotifyBroadcasts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_notify_peer_notify_broadcasts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

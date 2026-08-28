<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for peerBlocked of PeerBlocked (crc32 e8fd8014). */
final class TlPeerBlockedPeerBlocked extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_peer_blocked_peer_blocked';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer_id' => 'string',
        'date' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputNotifyUsers of InputNotifyPeer (crc32 193b4417). */
final class TlInputNotifyPeerInputNotifyUsers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_notify_peer_input_notify_users';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

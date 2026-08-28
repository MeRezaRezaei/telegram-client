<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputNotifyChats of InputNotifyPeer (crc32 4a95e84e). */
final class TlInputNotifyPeerInputNotifyChats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_notify_peer_input_notify_chats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

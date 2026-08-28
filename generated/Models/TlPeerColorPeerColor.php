<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for peerColor of PeerColor (crc32 b54b5acf). */
final class TlPeerColorPeerColor extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_peer_color_peer_color';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'color' => 'int',
        'background_emoji_id' => 'int',
    ];
}

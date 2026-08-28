<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param dark_colors (table tl_peer_color_peer_color_collectible__dark_colors). */
final class TlPeerColorPeerColorCollectibleDark_colors extends TlAnchorModel
{
    protected $table = 'tl_peer_color_peer_color_collectible__dark_colors';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

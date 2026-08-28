<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param colors (table tl_help_peer_color_set_peer_color_set__colors). */
final class TlHelpPeerColorSetPeerColorSetColors extends TlAnchorModel
{
    protected $table = 'tl_help_peer_color_set_peer_color_set__colors';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

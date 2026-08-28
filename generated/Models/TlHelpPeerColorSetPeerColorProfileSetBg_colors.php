<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param bg_colors (table tl_help_peer_color_set_peer_color_profile_set__bg_colors). */
final class TlHelpPeerColorSetPeerColorProfileSetBg_colors extends TlAnchorModel
{
    protected $table = 'tl_help_peer_color_set_peer_color_profile_set__bg_colors';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

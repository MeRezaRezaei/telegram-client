<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param story_colors (table tl_help_peer_color_set_peer_color_profile_set_d09cf1f8f0b4). */
final class TlHelpPeerColorSetPeerColorProfileSetStory_colors extends TlAnchorModel
{
    protected $table = 'tl_help_peer_color_set_peer_color_profile_set_d09cf1f8f0b4';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

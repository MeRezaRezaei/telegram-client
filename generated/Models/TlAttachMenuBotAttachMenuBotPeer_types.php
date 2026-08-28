<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param peer_types (table tl_attach_menu_bot_attach_menu_bot__peer_types). */
final class TlAttachMenuBotAttachMenuBotPeer_types extends TlAnchorModel
{
    protected $table = 'tl_attach_menu_bot_attach_menu_bot__peer_types';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

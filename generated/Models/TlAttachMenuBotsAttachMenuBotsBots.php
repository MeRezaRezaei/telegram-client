<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param bots (table tl_attach_menu_bots_attach_menu_bots__bots). */
final class TlAttachMenuBotsAttachMenuBotsBots extends TlAnchorModel
{
    protected $table = 'tl_attach_menu_bots_attach_menu_bots__bots';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

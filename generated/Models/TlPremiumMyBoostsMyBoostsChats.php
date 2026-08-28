<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param chats (table tl_premium_my_boosts_my_boosts__chats). */
final class TlPremiumMyBoostsMyBoostsChats extends TlAnchorModel
{
    protected $table = 'tl_premium_my_boosts_my_boosts__chats';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

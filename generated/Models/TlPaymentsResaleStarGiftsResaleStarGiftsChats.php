<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param chats (table tl_payments_resale_star_gifts_resale_star_gifts__chats). */
final class TlPaymentsResaleStarGiftsResaleStarGiftsChats extends TlAnchorModel
{
    protected $table = 'tl_payments_resale_star_gifts_resale_star_gifts__chats';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

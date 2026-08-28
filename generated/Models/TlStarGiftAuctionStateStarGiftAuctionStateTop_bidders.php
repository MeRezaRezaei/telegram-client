<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param top_bidders (table tl_star_gift_auction_state_star_gift_auction__3f263c3c4430). */
final class TlStarGiftAuctionStateStarGiftAuctionStateTop_bidders extends TlAnchorModel
{
    protected $table = 'tl_star_gift_auction_state_star_gift_auction__3f263c3c4430';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

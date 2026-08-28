<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftAuctionStateFinished of StarGiftAuctionState (crc32 972dabbf). */
final class TlStarGiftAuctionStateStarGiftAuctionStateFinished extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_auction_state_star_gift_auction__3ffddf14cd70';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'start_date' => 'int',
        'end_date' => 'int',
        'average_price' => 'int',
        'listed_count' => 'int',
        'fragment_listed_count' => 'int',
        'fragment_listed_url' => 'string',
    ];
}

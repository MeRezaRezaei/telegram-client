<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auctionBidLevel of AuctionBidLevel (crc32 310240cc). */
final class TlAuctionBidLevelAuctionBidLevel extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auction_bid_level_auction_bid_level';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'pos' => 'int',
        'amount' => 'int',
        'date' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputStarGiftAuction of InputStarGiftAuction (crc32 02e16c98). */
final class TlInputStarGiftAuctionInputStarGiftAuction extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_star_gift_auction_input_star_gift_auction';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'gift_id' => 'int',
    ];
}

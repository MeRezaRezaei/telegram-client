<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Gifts;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Users;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Chats;

/** Constructor model for payments.starGiftAuctionAcquiredGifts of payments.StarGiftAuctionAcquiredGifts (crc32 7d5bd1f0). */
final class TlPaymentsStarGiftAuctionAcquiredGiftsStarGiftAuctionAcquiredGifts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_star_gift_auction_acquired_gifts__3ef8dccf2514';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function gifts(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Gifts::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Users::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftAuctionAcquiredGifts3ef8dccf2514Chats::class);
    }
}

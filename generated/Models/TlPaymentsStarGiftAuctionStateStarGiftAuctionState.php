<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftAuctionStateStarGiftBa2a6a814fffUsers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftAuctionStateStarGiftBa2a6a814fffChats;

/** Constructor model for payments.starGiftAuctionState of payments.StarGiftAuctionState (crc32 6b39f4ec). */
final class TlPaymentsStarGiftAuctionStateStarGiftAuctionState extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_star_gift_auction_state_star_gift_ba2a6a814fff';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'gift' => 'string',
        'state' => 'string',
        'user_state' => 'string',
        'timeout' => 'int',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftAuctionStateStarGiftBa2a6a814fffUsers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftAuctionStateStarGiftBa2a6a814fffChats::class);
    }
}

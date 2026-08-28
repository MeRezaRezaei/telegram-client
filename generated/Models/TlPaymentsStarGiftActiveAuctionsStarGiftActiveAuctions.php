<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Auctions;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Users;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Chats;

/** Constructor model for payments.starGiftActiveAuctions of payments.StarGiftActiveAuctions (crc32 aef6abbc). */
final class TlPaymentsStarGiftActiveAuctionsStarGiftActiveAuctions extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_star_gift_active_auctions_star_gi_803614be0a98';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function auctions(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Auctions::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Users::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftActiveAuctionsStarGi803614be0a98Chats::class);
    }
}

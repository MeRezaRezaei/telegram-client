<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsSavedStarGiftsSavedStarGiftsGifts;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsSavedStarGiftsSavedStarGiftsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsSavedStarGiftsSavedStarGiftsUsers;

/** Constructor model for payments.savedStarGifts of payments.SavedStarGifts (crc32 95f389b1). */
final class TlPaymentsSavedStarGiftsSavedStarGifts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_saved_star_gifts_saved_star_gifts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'chat_notifications_enabled' => 'string',
        'next_offset' => 'string',
    ];

    public function gifts(): HasMany
    {
        return $this->tlChild(TlPaymentsSavedStarGiftsSavedStarGiftsGifts::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsSavedStarGiftsSavedStarGiftsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsSavedStarGiftsSavedStarGiftsUsers::class);
    }
}

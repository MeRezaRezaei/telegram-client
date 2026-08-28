<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsResaleStarGiftsResaleStarGiftsGifts;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsResaleStarGiftsResaleStarGiftsAttributes;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsResaleStarGiftsResaleStarGiftsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsResaleStarGiftsResaleStarGiftsCounters;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsResaleStarGiftsResaleStarGiftsUsers;

/** Constructor model for payments.resaleStarGifts of payments.ResaleStarGifts (crc32 947a12df). */
final class TlPaymentsResaleStarGiftsResaleStarGifts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_resale_star_gifts_resale_star_gifts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
        'attributes_hash' => 'int',
    ];

    public function gifts(): HasMany
    {
        return $this->tlChild(TlPaymentsResaleStarGiftsResaleStarGiftsGifts::class);
    }
    public function attributes(): HasMany
    {
        return $this->tlChild(TlPaymentsResaleStarGiftsResaleStarGiftsAttributes::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsResaleStarGiftsResaleStarGiftsChats::class);
    }
    public function counters(): HasMany
    {
        return $this->tlChild(TlPaymentsResaleStarGiftsResaleStarGiftsCounters::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsResaleStarGiftsResaleStarGiftsUsers::class);
    }
}

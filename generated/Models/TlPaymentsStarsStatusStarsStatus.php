<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatusSubscriptions;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatusHistory;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatusChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatusUsers;

/** Constructor model for payments.starsStatus of payments.StarsStatus (crc32 6c9ce8ed). */
final class TlPaymentsStarsStatusStarsStatus extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_stars_status_stars_status';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'balance' => 'string',
        'subscriptions_next_offset' => 'string',
        'subscriptions_missing_balance' => 'int',
        'next_offset' => 'string',
    ];

    public function subscriptions(): HasMany
    {
        return $this->tlChild(TlPaymentsStarsStatusStarsStatusSubscriptions::class);
    }
    public function history(): HasMany
    {
        return $this->tlChild(TlPaymentsStarsStatusStarsStatusHistory::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsStarsStatusStarsStatusChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsStarsStatusStarsStatusUsers::class);
    }
}

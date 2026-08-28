<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starsRevenueStatus of StarsRevenueStatus (crc32 febe5491). */
final class TlStarsRevenueStatusStarsRevenueStatus extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stars_revenue_status_stars_revenue_status';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'withdrawal_enabled' => 'bool',
        'current_balance' => 'string',
        'available_balance' => 'string',
        'overall_revenue' => 'string',
        'next_withdrawal_at' => 'int',
    ];
}

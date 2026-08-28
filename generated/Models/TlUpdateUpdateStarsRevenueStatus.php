<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateStarsRevenueStatus of Update (crc32 a584b019). */
final class TlUpdateUpdateStarsRevenueStatus extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_stars_revenue_status';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'status' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for prepaidStarsGiveaway of PrepaidGiveaway (crc32 9a9d77e0). */
final class TlPrepaidGiveawayPrepaidStarsGiveaway extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_prepaid_giveaway_prepaid_stars_giveaway';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
        'stars' => 'int',
        'quantity' => 'int',
        'boosts' => 'int',
        'date' => 'int',
    ];
}

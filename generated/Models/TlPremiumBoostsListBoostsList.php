<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPremiumBoostsListBoostsListBoosts;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPremiumBoostsListBoostsListUsers;

/** Constructor model for premium.boostsList of premium.BoostsList (crc32 86f8613c). */
final class TlPremiumBoostsListBoostsList extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_premium_boosts_list_boosts_list';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
    ];

    public function boosts(): HasMany
    {
        return $this->tlChild(TlPremiumBoostsListBoostsListBoosts::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPremiumBoostsListBoostsListUsers::class);
    }
}

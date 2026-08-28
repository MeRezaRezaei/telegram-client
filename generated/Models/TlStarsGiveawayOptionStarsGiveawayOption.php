<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarsGiveawayOptionStarsGiveawayOptionWinners;

/** Constructor model for starsGiveawayOption of StarsGiveawayOption (crc32 94ce852a). */
final class TlStarsGiveawayOptionStarsGiveawayOption extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stars_giveaway_option_stars_giveaway_option';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'extended' => 'bool',
        'tl_default' => 'bool',
        'stars' => 'int',
        'yearly_boosts' => 'int',
        'store_product' => 'string',
        'currency' => 'string',
        'amount' => 'int',
    ];

    public function winners(): HasMany
    {
        return $this->tlChild(TlStarsGiveawayOptionStarsGiveawayOptionWinners::class);
    }
}

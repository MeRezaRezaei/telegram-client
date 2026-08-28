<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starsSubscriptionPricing of StarsSubscriptionPricing (crc32 05416d58). */
final class TlStarsSubscriptionPricingStarsSubscriptionPricing extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stars_subscription_pricing_stars_subscription_pricing';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'period' => 'int',
        'amount' => 'int',
    ];
}

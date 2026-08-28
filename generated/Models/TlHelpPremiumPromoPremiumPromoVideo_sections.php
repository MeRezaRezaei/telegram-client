<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param video_sections (table tl_help_premium_promo_premium_promo__video_sections). */
final class TlHelpPremiumPromoPremiumPromoVideo_sections extends TlAnchorModel
{
    protected $table = 'tl_help_premium_promo_premium_promo__video_sections';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

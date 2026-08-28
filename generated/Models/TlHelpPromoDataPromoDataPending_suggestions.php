<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param pending_suggestions (table tl_help_promo_data_promo_data__pending_suggestions). */
final class TlHelpPromoDataPromoDataPending_suggestions extends TlAnchorModel
{
    protected $table = 'tl_help_promo_data_promo_data__pending_suggestions';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

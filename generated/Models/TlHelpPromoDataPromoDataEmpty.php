<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for help.promoDataEmpty of help.PromoData (crc32 98f6ac75). */
final class TlHelpPromoDataPromoDataEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_promo_data_promo_data_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'expires' => 'int',
    ];
}

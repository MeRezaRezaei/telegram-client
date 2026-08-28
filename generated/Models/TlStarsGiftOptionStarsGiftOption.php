<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starsGiftOption of StarsGiftOption (crc32 5e0589f1). */
final class TlStarsGiftOptionStarsGiftOption extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stars_gift_option_stars_gift_option';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'extended' => 'bool',
        'stars' => 'int',
        'store_product' => 'string',
        'currency' => 'string',
        'amount' => 'int',
    ];
}

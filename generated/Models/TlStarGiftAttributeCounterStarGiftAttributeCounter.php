<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftAttributeCounter of StarGiftAttributeCounter (crc32 2eb1b658). */
final class TlStarGiftAttributeCounterStarGiftAttributeCounter extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_attribute_counter_star_gift_attribute_counter';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'attribute' => 'string',
        'count' => 'int',
    ];
}

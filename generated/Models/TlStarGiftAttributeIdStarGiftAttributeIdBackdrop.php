<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftAttributeIdBackdrop of StarGiftAttributeId (crc32 1f01c757). */
final class TlStarGiftAttributeIdStarGiftAttributeIdBackdrop extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_attribute_id_star_gift_attribute_id_backdrop';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'backdrop_id' => 'int',
    ];
}

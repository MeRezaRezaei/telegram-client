<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftAttributeModel of StarGiftAttribute (crc32 565251e2). */
final class TlStarGiftAttributeStarGiftAttributeModel extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_attribute_star_gift_attribute_model';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'crafted' => 'bool',
        'name' => 'string',
        'document' => 'string',
        'rarity' => 'string',
    ];
}

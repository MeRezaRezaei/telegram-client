<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftCollection of StarGiftCollection (crc32 9d6b13b0). */
final class TlStarGiftCollectionStarGiftCollection extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_collection_star_gift_collection';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'collection_id' => 'int',
        'title' => 'string',
        'icon' => 'string',
        'gifts_count' => 'int',
        'hash' => 'int',
    ];
}

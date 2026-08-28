<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for starGiftAttributeOriginalDetails of StarGiftAttribute (crc32 e0bff26c). */
final class TlStarGiftAttributeStarGiftAttributeOriginalDetails extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_star_gift_attribute_star_gift_attribute_or_06bf30da1b7d';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'sender_id' => 'string',
        'recipient_id' => 'string',
        'date' => 'int',
        'message' => 'string',
    ];
}

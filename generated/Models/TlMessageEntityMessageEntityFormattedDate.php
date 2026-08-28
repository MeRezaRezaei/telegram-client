<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageEntityFormattedDate of MessageEntity (crc32 904ac7c7). */
final class TlMessageEntityMessageEntityFormattedDate extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_entity_message_entity_formatted_date';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'relative' => 'bool',
        'short_time' => 'bool',
        'long_time' => 'bool',
        'short_date' => 'bool',
        'long_date' => 'bool',
        'day_of_week' => 'bool',
        'tl_offset' => 'int',
        'length' => 'int',
        'date' => 'int',
    ];
}

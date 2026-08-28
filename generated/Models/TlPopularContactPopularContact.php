<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for popularContact of PopularContact (crc32 5ce14175). */
final class TlPopularContactPopularContact extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_popular_contact_popular_contact';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'client_id' => 'int',
        'importers' => 'int',
    ];
}

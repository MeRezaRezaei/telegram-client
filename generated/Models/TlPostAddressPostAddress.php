<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for postAddress of PostAddress (crc32 1e8caaeb). */
final class TlPostAddressPostAddress extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_post_address_post_address';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'street_line1' => 'string',
        'street_line2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country_iso2' => 'string',
        'post_code' => 'string',
    ];
}

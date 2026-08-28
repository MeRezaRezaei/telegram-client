<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for jsonNumber of JSONValue (crc32 2be0dfa4). */
final class TlJSONValueJsonNumber extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_j_s_o_n_value_json_number';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_value' => 'float',
    ];
}

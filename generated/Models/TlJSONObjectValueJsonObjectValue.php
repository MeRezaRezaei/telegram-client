<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for jsonObjectValue of JSONObjectValue (crc32 c0de1bd9). */
final class TlJSONObjectValueJsonObjectValue extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_j_s_o_n_object_value_json_object_value';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_key' => 'string',
        'tl_value' => 'string',
    ];
}

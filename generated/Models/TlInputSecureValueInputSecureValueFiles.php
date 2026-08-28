<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param files (table tl_input_secure_value_input_secure_value__files). */
final class TlInputSecureValueInputSecureValueFiles extends TlAnchorModel
{
    protected $table = 'tl_input_secure_value_input_secure_value__files';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

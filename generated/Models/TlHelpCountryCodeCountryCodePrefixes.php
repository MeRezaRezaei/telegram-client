<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param prefixes (table tl_help_country_code_country_code__prefixes). */
final class TlHelpCountryCodeCountryCodePrefixes extends TlAnchorModel
{
    protected $table = 'tl_help_country_code_country_code__prefixes';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

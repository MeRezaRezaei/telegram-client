<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpCountryCountryCountry_codes;

/** Constructor model for help.country of help.Country (crc32 c3878e23). */
final class TlHelpCountryCountry extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_country_country';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'hidden' => 'bool',
        'iso2' => 'string',
        'default_name' => 'string',
        'name' => 'string',
    ];

    public function countryCodes(): HasMany
    {
        return $this->tlChild(TlHelpCountryCountryCountry_codes::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for help.termsOfServiceUpdate of help.TermsOfServiceUpdate (crc32 28ecf961). */
final class TlHelpTermsOfServiceUpdateTermsOfServiceUpdate extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_terms_of_service_update_terms_of_service_update';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'expires' => 'int',
        'terms_of_service' => 'string',
    ];
}

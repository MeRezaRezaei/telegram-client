<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param entities (table tl_help_terms_of_service_terms_of_service__entities). */
final class TlHelpTermsOfServiceTermsOfServiceEntities extends TlAnchorModel
{
    protected $table = 'tl_help_terms_of_service_terms_of_service__entities';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

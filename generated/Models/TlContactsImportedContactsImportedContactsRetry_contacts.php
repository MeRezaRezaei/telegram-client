<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param retry_contacts (table tl_contacts_imported_contacts_imported_contac_7e82948d3852). */
final class TlContactsImportedContactsImportedContactsRetry_contacts extends TlAnchorModel
{
    protected $table = 'tl_contacts_imported_contacts_imported_contac_7e82948d3852';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

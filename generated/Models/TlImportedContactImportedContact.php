<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for importedContact of ImportedContact (crc32 c13e3c50). */
final class TlImportedContactImportedContact extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_imported_contact_imported_contact';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'user_id' => 'int',
        'client_id' => 'int',
    ];
}

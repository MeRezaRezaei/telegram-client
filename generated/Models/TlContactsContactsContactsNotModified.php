<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for contacts.contactsNotModified of contacts.Contacts (crc32 b74ba9d2). */
final class TlContactsContactsContactsNotModified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_contacts_contacts_not_modified';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

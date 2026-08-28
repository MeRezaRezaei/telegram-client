<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsImportedContactsImportedContactsImported;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsImportedContactsImportedContactsPopular_invites;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsImportedContactsImportedContactsRetry_contacts;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsImportedContactsImportedContactsUsers;

/** Constructor model for contacts.importedContacts of contacts.ImportedContacts (crc32 77d01c3b). */
final class TlContactsImportedContactsImportedContacts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_imported_contacts_imported_contacts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function imported(): HasMany
    {
        return $this->tlChild(TlContactsImportedContactsImportedContactsImported::class);
    }
    public function popularInvites(): HasMany
    {
        return $this->tlChild(TlContactsImportedContactsImportedContactsPopular_invites::class);
    }
    public function retryContacts(): HasMany
    {
        return $this->tlChild(TlContactsImportedContactsImportedContactsRetry_contacts::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsImportedContactsImportedContactsUsers::class);
    }
}

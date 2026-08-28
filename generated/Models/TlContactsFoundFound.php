<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsFoundFoundMy_results;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsFoundFoundResults;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsFoundFoundChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactsFoundFoundUsers;

/** Constructor model for contacts.found of contacts.Found (crc32 b3134d9d). */
final class TlContactsFoundFound extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_found_found';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function myResults(): HasMany
    {
        return $this->tlChild(TlContactsFoundFoundMy_results::class);
    }
    public function results(): HasMany
    {
        return $this->tlChild(TlContactsFoundFoundResults::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlContactsFoundFoundChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlContactsFoundFoundUsers::class);
    }
}

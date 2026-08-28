<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for savedPhoneContact of SavedContact (crc32 1142bd56). */
final class TlSavedContactSavedPhoneContact extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_saved_contact_saved_phone_contact';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'phone' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'date' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for privacyKeyAddedByPhone of PrivacyKey (crc32 42ffd42b). */
final class TlPrivacyKeyPrivacyKeyAddedByPhone extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_privacy_key_privacy_key_added_by_phone';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

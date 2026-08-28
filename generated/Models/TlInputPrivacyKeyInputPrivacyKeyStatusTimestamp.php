<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPrivacyKeyStatusTimestamp of InputPrivacyKey (crc32 4f96cb18). */
final class TlInputPrivacyKeyInputPrivacyKeyStatusTimestamp extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_privacy_key_input_privacy_key_status_timestamp';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

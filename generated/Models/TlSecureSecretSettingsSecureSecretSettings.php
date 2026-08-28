<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for secureSecretSettings of SecureSecretSettings (crc32 1527bcac). */
final class TlSecureSecretSettingsSecureSecretSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_secret_settings_secure_secret_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'secure_algo' => 'string',
        'secure_secret' => 'string',
        'secure_secret_id' => 'int',
    ];
}

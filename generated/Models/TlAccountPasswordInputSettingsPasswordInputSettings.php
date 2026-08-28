<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for account.passwordInputSettings of account.PasswordInputSettings (crc32 c23727c9). */
final class TlAccountPasswordInputSettingsPasswordInputSettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_password_input_settings_password_input_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'new_algo' => 'string',
        'new_password_hash' => 'string',
        'hint' => 'string',
        'email' => 'string',
        'new_secure_settings' => 'string',
    ];
}

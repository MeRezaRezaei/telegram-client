<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.passkeyLoginOptions of auth.PasskeyLoginOptions (crc32 e2037789). */
final class TlAuthPasskeyLoginOptionsPasskeyLoginOptions extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_passkey_login_options_passkey_login_options';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'options' => 'string',
    ];
}

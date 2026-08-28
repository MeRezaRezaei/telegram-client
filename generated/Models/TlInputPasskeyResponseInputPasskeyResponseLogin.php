<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPasskeyResponseLogin of InputPasskeyResponse (crc32 c31fc14a). */
final class TlInputPasskeyResponseInputPasskeyResponseLogin extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_passkey_response_input_passkey_response_login';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'client_data' => 'string',
        'authenticator_data' => 'string',
        'signature' => 'string',
        'user_handle' => 'string',
    ];
}

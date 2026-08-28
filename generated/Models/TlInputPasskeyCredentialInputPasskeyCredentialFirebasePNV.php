<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPasskeyCredentialFirebasePNV of InputPasskeyCredential (crc32 5b1ccb28). */
final class TlInputPasskeyCredentialInputPasskeyCredentialFirebasePNV extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_passkey_credential_input_passkey_cre_f2c081028727';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'pnv_token' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.loginTokenSuccess of auth.LoginToken (crc32 390d5c5e). */
final class TlAuthLoginTokenLoginTokenSuccess extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_login_token_login_token_success';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_authorization' => 'string',
    ];
}

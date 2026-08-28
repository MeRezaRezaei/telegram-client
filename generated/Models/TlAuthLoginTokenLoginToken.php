<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.loginToken of auth.LoginToken (crc32 629f1980). */
final class TlAuthLoginTokenLoginToken extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_login_token_login_token';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'expires' => 'int',
        'token' => 'string',
    ];
}

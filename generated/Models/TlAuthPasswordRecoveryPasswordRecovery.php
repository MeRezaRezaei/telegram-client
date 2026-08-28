<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.passwordRecovery of auth.PasswordRecovery (crc32 137948a5). */
final class TlAuthPasswordRecoveryPasswordRecovery extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_password_recovery_password_recovery';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'email_pattern' => 'string',
    ];
}

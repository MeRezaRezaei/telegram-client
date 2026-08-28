<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for account.emailVerifiedLogin of account.EmailVerified (crc32 e1bb0d61). */
final class TlAccountEmailVerifiedEmailVerifiedLogin extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_email_verified_email_verified_login';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'email' => 'string',
        'sent_code' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for account.emailVerified of account.EmailVerified (crc32 2b96cd1b). */
final class TlAccountEmailVerifiedEmailVerified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_email_verified_email_verified';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'email' => 'string',
    ];
}

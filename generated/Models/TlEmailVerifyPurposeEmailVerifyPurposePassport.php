<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for emailVerifyPurposePassport of EmailVerifyPurpose (crc32 bbf51685). */
final class TlEmailVerifyPurposeEmailVerifyPurposePassport extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_email_verify_purpose_email_verify_purpose_passport';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

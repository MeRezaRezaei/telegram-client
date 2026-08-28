<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for secureValueError of SecureValueError (crc32 869d758f). */
final class TlSecureValueErrorSecureValueError extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_value_error_secure_value_error';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_type' => 'string',
        'hash' => 'string',
        'text' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for secureValueTypeBankStatement of SecureValueType (crc32 89137c0d). */
final class TlSecureValueTypeSecureValueTypeBankStatement extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_value_type_secure_value_type_bank_statement';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

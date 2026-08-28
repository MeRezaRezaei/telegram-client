<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPaymentCredentials of InputPaymentCredentials (crc32 3417d728). */
final class TlInputPaymentCredentialsInputPaymentCredentials extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_payment_credentials_input_payment_credentials';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'save' => 'bool',
        'data' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputStorePaymentAuthCode of InputStorePaymentPurpose (crc32 3fc18057). */
final class TlInputStorePaymentPurposeInputStorePaymentAuthCode extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_store_payment_purpose_input_store_pa_fcc6e9ee0964';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'restore' => 'bool',
        'phone_number' => 'string',
        'phone_code_hash' => 'string',
        'premium_days' => 'int',
        'currency' => 'string',
        'amount' => 'int',
    ];
}

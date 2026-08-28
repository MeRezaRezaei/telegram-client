<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputStorePaymentStarsGift of InputStorePaymentPurpose (crc32 1d741ef7). */
final class TlInputStorePaymentPurposeInputStorePaymentStarsGift extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_store_payment_purpose_input_store_pa_0bfdc631e6d2';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'user_id' => 'string',
        'stars' => 'int',
        'currency' => 'string',
        'amount' => 'int',
    ];
}

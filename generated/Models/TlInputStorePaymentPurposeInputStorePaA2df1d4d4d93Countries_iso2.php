<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param countries_iso2 (table tl_input_store_payment_purpose_input_store_pa_91597f6f2753). */
final class TlInputStorePaymentPurposeInputStorePaA2df1d4d4d93Countries_iso2 extends TlAnchorModel
{
    protected $table = 'tl_input_store_payment_purpose_input_store_pa_91597f6f2753';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

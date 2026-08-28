<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param suggested_tip_amounts (table tl_invoice_invoice__suggested_tip_amounts). */
final class TlInvoiceInvoiceSuggested_tip_amounts extends TlAnchorModel
{
    protected $table = 'tl_invoice_invoice__suggested_tip_amounts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputInvoiceStarGiftDropOriginalDetails of InputInvoice (crc32 0923d8d1). */
final class TlInputInvoiceInputInvoiceStarGiftDropOriginalDetails extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_invoice_input_invoice_star_gift_drop_bd25ad852c6a';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'stargift' => 'string',
    ];
}

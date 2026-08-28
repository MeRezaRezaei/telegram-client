<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputInvoiceBusinessBotTransferStars of InputInvoice (crc32 f4997e42). */
final class TlInputInvoiceInputInvoiceBusinessBotTransferStars extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_invoice_input_invoice_business_bot_transfer_stars';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bot' => 'string',
        'stars' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param users (table tl_payments_payment_receipt_payment_receipt__users). */
final class TlPaymentsPaymentReceiptPaymentReceiptUsers extends TlAnchorModel
{
    protected $table = 'tl_payments_payment_receipt_payment_receipt__users';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

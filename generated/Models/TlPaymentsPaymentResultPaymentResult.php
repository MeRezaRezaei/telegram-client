<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for payments.paymentResult of payments.PaymentResult (crc32 4e5f810d). */
final class TlPaymentsPaymentResultPaymentResult extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_payment_result_payment_result';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'updates' => 'string',
    ];
}

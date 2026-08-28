<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param additional_methods (table tl_payments_payment_form_payment_form__additional_methods). */
final class TlPaymentsPaymentFormPaymentFormAdditional_methods extends TlAnchorModel
{
    protected $table = 'tl_payments_payment_form_payment_form__additional_methods';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for paymentFormMethod of PaymentFormMethod (crc32 88f8f21b). */
final class TlPaymentFormMethodPaymentFormMethod extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payment_form_method_payment_form_method';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'title' => 'string',
    ];
}

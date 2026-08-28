<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for paymentSavedCredentialsCard of PaymentSavedCredentials (crc32 cdc27a1f). */
final class TlPaymentSavedCredentialsPaymentSavedCredentialsCard extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payment_saved_credentials_payment_saved_cr_5362dcf43125';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'string',
        'title' => 'string',
    ];
}

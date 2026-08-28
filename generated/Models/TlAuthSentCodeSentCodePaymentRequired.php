<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.sentCodePaymentRequired of auth.SentCode (crc32 f8827ebf). */
final class TlAuthSentCodeSentCodePaymentRequired extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_sent_code_sent_code_payment_required';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'store_product' => 'string',
        'phone_code_hash' => 'string',
        'support_email_address' => 'string',
        'support_email_subject' => 'string',
        'premium_days' => 'int',
        'currency' => 'string',
        'amount' => 'int',
    ];
}

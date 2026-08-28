<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsPaymentReceiptPaymentReceiptStarsUsers;

/** Constructor model for payments.paymentReceiptStars of payments.PaymentReceipt (crc32 dabbf83a). */
final class TlPaymentsPaymentReceiptPaymentReceiptStars extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_payment_receipt_payment_receipt_stars';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'date' => 'int',
        'bot_id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'photo' => 'string',
        'invoice' => 'string',
        'currency' => 'string',
        'total_amount' => 'int',
        'transaction_id' => 'string',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsPaymentReceiptPaymentReceiptStarsUsers::class);
    }
}

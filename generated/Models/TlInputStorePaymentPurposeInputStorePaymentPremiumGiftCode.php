<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaDd29b020fdd6Users;

/** Constructor model for inputStorePaymentPremiumGiftCode of InputStorePaymentPurpose (crc32 fb790393). */
final class TlInputStorePaymentPurposeInputStorePaymentPremiumGiftCode extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_store_payment_purpose_input_store_pa_dd29b020fdd6';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'boost_peer' => 'string',
        'currency' => 'string',
        'amount' => 'int',
        'message' => 'string',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlInputStorePaymentPurposeInputStorePaDd29b020fdd6Users::class);
    }
}

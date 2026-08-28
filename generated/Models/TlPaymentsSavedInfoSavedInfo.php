<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for payments.savedInfo of payments.SavedInfo (crc32 fb8fe43c). */
final class TlPaymentsSavedInfoSavedInfo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_saved_info_saved_info';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'has_saved_credentials' => 'bool',
        'saved_info' => 'string',
    ];
}

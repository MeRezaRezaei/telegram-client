<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputStarsTransaction of InputStarsTransaction (crc32 206ae6d1). */
final class TlInputStarsTransactionInputStarsTransaction extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_stars_transaction_input_stars_transaction';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'refund' => 'bool',
        'tl_id' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for bankCardOpenUrl of BankCardOpenUrl (crc32 f568028a). */
final class TlBankCardOpenUrlBankCardOpenUrl extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bank_card_open_url_bank_card_open_url';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'name' => 'string',
    ];
}

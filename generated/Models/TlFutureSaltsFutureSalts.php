<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFutureSaltsFutureSaltsSalts;

/** Constructor model for future_salts of FutureSalts (crc32 ae500895). */
final class TlFutureSaltsFutureSalts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_future_salts_future_salts';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'req_msg_id' => 'int',
        'now' => 'int',
    ];

    public function salts(): HasMany
    {
        return $this->tlChild(TlFutureSaltsFutureSaltsSalts::class);
    }
}

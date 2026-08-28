<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for p_q_inner_data_temp_dc of P_Q_inner_data (crc32 56fddf88). */
final class TlPQInnerDataPQInnerDataTempDc extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_p__q_inner_data_p_q_inner_data_temp_dc';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'pq' => 'string',
        'p' => 'string',
        'q' => 'string',
        'nonce' => 'string',
        'server_nonce' => 'string',
        'new_nonce' => 'string',
        'dc' => 'int',
        'expires_in' => 'int',
    ];
}

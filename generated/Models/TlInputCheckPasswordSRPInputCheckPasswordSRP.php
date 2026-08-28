<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputCheckPasswordSRP of InputCheckPasswordSRP (crc32 d27ff082). */
final class TlInputCheckPasswordSRPInputCheckPasswordSRP extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_check_password_s_r_p_input_check_password_s_r_p';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'srp_id' => 'int',
        'a' => 'string',
        'm1' => 'string',
    ];
}

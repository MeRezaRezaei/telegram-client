<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for passwordKdfAlgoUnknown of PasswordKdfAlgo (crc32 d45ab096). */
final class TlPasswordKdfAlgoPasswordKdfAlgoUnknown extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_password_kdf_algo_password_kdf_algo_unknown';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

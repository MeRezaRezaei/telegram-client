<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for userStatusLastMonth of UserStatus (crc32 65899777). */
final class TlUserStatusUserStatusLastMonth extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_user_status_user_status_last_month';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'by_me' => 'bool',
    ];
}

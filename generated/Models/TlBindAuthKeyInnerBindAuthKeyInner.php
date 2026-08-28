<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for bind_auth_key_inner of BindAuthKeyInner (crc32 75a3f765). */
final class TlBindAuthKeyInnerBindAuthKeyInner extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bind_auth_key_inner_bind_auth_key_inner';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'nonce' => 'int',
        'temp_auth_key_id' => 'int',
        'perm_auth_key_id' => 'int',
        'temp_session_id' => 'int',
        'expires_at' => 'int',
    ];
}

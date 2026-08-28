<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for server_DH_params_fail of Server_DH_Params (crc32 79cb045d). */
final class TlServerDHParamsServerDHParamsFail extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_server__d_h__params_server__d_h_params_fail';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'nonce' => 'string',
        'server_nonce' => 'string',
        'new_nonce_hash' => 'string',
    ];
}

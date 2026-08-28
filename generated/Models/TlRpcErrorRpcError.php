<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for rpc_error of RpcError (crc32 2144ca19). */
final class TlRpcErrorRpcError extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_rpc_error_rpc_error';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'error_code' => 'int',
        'error_message' => 'string',
    ];
}

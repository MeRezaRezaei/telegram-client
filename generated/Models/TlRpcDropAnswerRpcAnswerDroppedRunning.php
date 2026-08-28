<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for rpc_answer_dropped_running of RpcDropAnswer (crc32 cd78e586). */
final class TlRpcDropAnswerRpcAnswerDroppedRunning extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_rpc_drop_answer_rpc_answer_dropped_running';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

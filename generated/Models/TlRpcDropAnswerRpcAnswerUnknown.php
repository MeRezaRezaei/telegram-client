<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for rpc_answer_unknown of RpcDropAnswer (crc32 5e2ad36e). */
final class TlRpcDropAnswerRpcAnswerUnknown extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_rpc_drop_answer_rpc_answer_unknown';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

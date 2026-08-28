<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateBotPrecheckoutQuery of Update (crc32 8caa9a96). */
final class TlUpdateUpdateBotPrecheckoutQuery extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_bot_precheckout_query';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'query_id' => 'int',
        'user_id' => 'int',
        'payload' => 'string',
        'info' => 'string',
        'shipping_option_id' => 'string',
        'currency' => 'string',
        'total_amount' => 'int',
    ];
}

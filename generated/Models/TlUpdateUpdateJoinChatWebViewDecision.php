<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateJoinChatWebViewDecision of Update (crc32 bdac7e70). */
final class TlUpdateUpdateJoinChatWebViewDecision extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_join_chat_web_view_decision';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'query_id' => 'int',
        'result' => 'string',
    ];
}

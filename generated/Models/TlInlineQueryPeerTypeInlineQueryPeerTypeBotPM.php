<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inlineQueryPeerTypeBotPM of InlineQueryPeerType (crc32 0e3b2d0c). */
final class TlInlineQueryPeerTypeInlineQueryPeerTypeBotPM extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_inline_query_peer_type_inline_query_peer_type_bot_p_m';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

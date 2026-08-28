<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatReactionsNone of ChatReactions (crc32 eafc32bc). */
final class TlChatReactionsChatReactionsNone extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_reactions_chat_reactions_none';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

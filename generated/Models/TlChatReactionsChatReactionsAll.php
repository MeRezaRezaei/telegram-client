<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatReactionsAll of ChatReactions (crc32 52928bca). */
final class TlChatReactionsChatReactionsAll extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_reactions_chat_reactions_all';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'allow_custom' => 'bool',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesReactionsReactionsReactions;

/** Constructor model for messages.reactions of messages.Reactions (crc32 eafdf716). */
final class TlMessagesReactionsReactions extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_reactions_reactions';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function reactions(): HasMany
    {
        return $this->tlChild(TlMessagesReactionsReactionsReactions::class);
    }
}

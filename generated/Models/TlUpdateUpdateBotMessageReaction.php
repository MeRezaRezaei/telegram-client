<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotMessageReactionOld_reactions;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotMessageReactionNew_reactions;

/** Constructor model for updateBotMessageReaction of Update (crc32 ac21d3ce). */
final class TlUpdateUpdateBotMessageReaction extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_bot_message_reaction';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'msg_id' => 'int',
        'date' => 'int',
        'actor' => 'string',
        'qts' => 'int',
    ];

    public function oldReactions(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateBotMessageReactionOld_reactions::class);
    }
    public function newReactions(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateBotMessageReactionNew_reactions::class);
    }
}

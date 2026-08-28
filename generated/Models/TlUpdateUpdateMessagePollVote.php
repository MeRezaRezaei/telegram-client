<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMessagePollVoteOptions;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMessagePollVotePositions;

/** Constructor model for updateMessagePollVote of Update (crc32 7699f014). */
final class TlUpdateUpdateMessagePollVote extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_message_poll_vote';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'poll_id' => 'int',
        'peer' => 'string',
        'qts' => 'int',
    ];

    public function options(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateMessagePollVoteOptions::class);
    }
    public function positions(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateMessagePollVotePositions::class);
    }
}

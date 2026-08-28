<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionConferenceCallOther_participants;

/** Constructor model for messageActionConferenceCall of MessageAction (crc32 2ffe2f7a). */
final class TlMessageActionMessageActionConferenceCall extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_conference_call';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'missed' => 'bool',
        'active' => 'bool',
        'video' => 'bool',
        'call_id' => 'int',
        'duration' => 'int',
    ];

    public function otherParticipants(): HasMany
    {
        return $this->tlChild(TlMessageActionMessageActionConferenceCallOther_participants::class);
    }
}

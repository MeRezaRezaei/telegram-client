<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatParticipantsForbidden of ChatParticipants (crc32 8763d3e1). */
final class TlChatParticipantsChatParticipantsForbidden extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_participants_chat_participants_forbidden';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'chat_id' => 'int',
        'self_participant' => 'string',
    ];
}

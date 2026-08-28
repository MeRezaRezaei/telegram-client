<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatParticipantsChatParticipantsParticipants;

/** Constructor model for chatParticipants of ChatParticipants (crc32 3cbc93f8). */
final class TlChatParticipantsChatParticipants extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_participants_chat_participants';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'chat_id' => 'int',
        'version' => 'int',
    ];

    public function participants(): HasMany
    {
        return $this->tlChild(TlChatParticipantsChatParticipantsParticipants::class);
    }
}

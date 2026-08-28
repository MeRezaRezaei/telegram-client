<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsChannelParticipantChannelParticipantChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsChannelParticipantChannelParticipantUsers;

/** Constructor model for channels.channelParticipant of channels.ChannelParticipant (crc32 dfb80317). */
final class TlChannelsChannelParticipantChannelParticipant extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channels_channel_participant_channel_participant';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'participant' => 'string',
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlChannelsChannelParticipantChannelParticipantChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlChannelsChannelParticipantChannelParticipantUsers::class);
    }
}

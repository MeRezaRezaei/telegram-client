<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelParticipantCreator of ChannelParticipant (crc32 2fe601d3). */
final class TlChannelParticipantChannelParticipantCreator extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_participant_channel_participant_creator';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'user_id' => 'int',
        'admin_rights' => 'string',
        'rank' => 'string',
    ];
}

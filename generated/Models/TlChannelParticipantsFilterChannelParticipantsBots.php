<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelParticipantsBots of ChannelParticipantsFilter (crc32 b0d1865b). */
final class TlChannelParticipantsFilterChannelParticipantsBots extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_participants_filter_channel_participants_bots';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

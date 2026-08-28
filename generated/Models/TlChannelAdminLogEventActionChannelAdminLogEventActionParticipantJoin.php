<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelAdminLogEventActionParticipantJoin of ChannelAdminLogEventAction (crc32 183040d3). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantJoin extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_admin_log_event_action_channel_adm_def61dc1b5d2';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

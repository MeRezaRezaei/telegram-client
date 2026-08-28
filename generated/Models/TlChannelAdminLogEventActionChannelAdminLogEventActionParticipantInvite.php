<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelAdminLogEventActionParticipantInvite of ChannelAdminLogEventAction (crc32 e31c34d8). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantInvite extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_admin_log_event_action_channel_adm_6750f366ea9f';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'participant' => 'string',
    ];
}

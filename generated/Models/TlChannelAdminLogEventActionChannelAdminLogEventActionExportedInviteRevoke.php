<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelAdminLogEventActionExportedInviteRevoke of ChannelAdminLogEventAction (crc32 410a134e). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionExportedInviteRevoke extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_admin_log_event_action_channel_adm_c2c6ac3df795';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'invite' => 'string',
    ];
}

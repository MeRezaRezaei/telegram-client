<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param prev_value (table tl_channel_admin_log_event_action_channel_adm_17108c5055e7). */
final class TlChannelAdminLogEventActionChannelAdm38f150219e2ePrev_value extends TlAnchorModel
{
    protected $table = 'tl_channel_admin_log_event_action_channel_adm_17108c5055e7';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

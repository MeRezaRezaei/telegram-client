<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channelAdminLogEventActionChangeStickerSet of ChannelAdminLogEventAction (crc32 b1c3caa7). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionChangeStickerSet extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channel_admin_log_event_action_channel_adm_ec676b493c8e';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'prev_stickerset' => 'string',
        'new_stickerset' => 'string',
    ];
}

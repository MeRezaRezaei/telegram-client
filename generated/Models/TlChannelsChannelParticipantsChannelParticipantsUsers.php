<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param users (table tl_channels_channel_participants_channel_part_c16b51bee12a). */
final class TlChannelsChannelParticipantsChannelParticipantsUsers extends TlAnchorModel
{
    protected $table = 'tl_channels_channel_participants_channel_part_c16b51bee12a';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

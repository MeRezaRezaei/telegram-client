<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for channels.channelParticipantsNotModified of channels.ChannelParticipants (crc32 f0173fe9). */
final class TlChannelsChannelParticipantsChannelParticipantsNotModified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channels_channel_participants_channel_part_453012fa781f';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

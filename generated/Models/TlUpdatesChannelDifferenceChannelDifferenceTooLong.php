<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceTooLongMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceTooLongChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceTooLongUsers;

/** Constructor model for updates.channelDifferenceTooLong of updates.ChannelDifference (crc32 a4bcc6fe). */
final class TlUpdatesChannelDifferenceChannelDifferenceTooLong extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_channel_difference_channel_difference_too_long';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'final' => 'bool',
        'timeout' => 'int',
        'dialog' => 'string',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlUpdatesChannelDifferenceChannelDifferenceTooLongMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlUpdatesChannelDifferenceChannelDifferenceTooLongChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlUpdatesChannelDifferenceChannelDifferenceTooLongUsers::class);
    }
}

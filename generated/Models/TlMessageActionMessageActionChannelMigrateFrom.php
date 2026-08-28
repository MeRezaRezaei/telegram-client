<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionChannelMigrateFrom of MessageAction (crc32 ea3948e9). */
final class TlMessageActionMessageActionChannelMigrateFrom extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_channel_migrate_from';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'title' => 'string',
        'chat_id' => 'int',
    ];
}

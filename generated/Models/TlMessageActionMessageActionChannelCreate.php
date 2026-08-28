<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionChannelCreate of MessageAction (crc32 95d2ac92). */
final class TlMessageActionMessageActionChannelCreate extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_channel_create';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'title' => 'string',
    ];
}

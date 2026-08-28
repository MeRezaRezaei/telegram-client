<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messages.messageEditData of messages.MessageEditData (crc32 26b5dde6). */
final class TlMessagesMessageEditDataMessageEditData extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_message_edit_data_message_edit_data';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'caption' => 'bool',
    ];
}

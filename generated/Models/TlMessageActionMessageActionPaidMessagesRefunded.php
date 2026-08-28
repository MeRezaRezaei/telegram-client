<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionPaidMessagesRefunded of MessageAction (crc32 ac1f1fcd). */
final class TlMessageActionMessageActionPaidMessagesRefunded extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_paid_messages_refunded';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
        'stars' => 'int',
    ];
}

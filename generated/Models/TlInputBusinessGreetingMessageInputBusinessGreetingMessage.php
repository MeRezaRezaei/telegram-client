<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputBusinessGreetingMessage of InputBusinessGreetingMessage (crc32 0194cb3b). */
final class TlInputBusinessGreetingMessageInputBusinessGreetingMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_business_greeting_message_input_busi_21ffd04e8009';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'shortcut_id' => 'int',
        'recipients' => 'string',
        'no_activity_days' => 'int',
    ];
}

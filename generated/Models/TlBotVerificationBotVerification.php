<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for botVerification of BotVerification (crc32 f93cd45c). */
final class TlBotVerificationBotVerification extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bot_verification_bot_verification';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bot_id' => 'int',
        'icon' => 'int',
        'description' => 'string',
    ];
}

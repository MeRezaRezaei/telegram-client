<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for businessAwayMessage of BusinessAwayMessage (crc32 ef156a5c). */
final class TlBusinessAwayMessageBusinessAwayMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_business_away_message_business_away_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'offline_only' => 'bool',
        'shortcut_id' => 'int',
        'schedule' => 'string',
        'recipients' => 'string',
    ];
}

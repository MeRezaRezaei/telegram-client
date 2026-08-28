<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageEmpty of Message (crc32 90a6ca84). */
final class TlMessageMessageEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_message_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tl_id' => 'int',
        'peer_id' => 'string',
    ];
}

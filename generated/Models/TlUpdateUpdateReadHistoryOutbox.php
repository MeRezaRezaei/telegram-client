<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateReadHistoryOutbox of Update (crc32 2f2f21bf). */
final class TlUpdateUpdateReadHistoryOutbox extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_read_history_outbox';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'max_id' => 'int',
        'pts' => 'int',
        'pts_count' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for outboxReadDate of OutboxReadDate (crc32 3bb842ac). */
final class TlOutboxReadDateOutboxReadDate extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_outbox_read_date_outbox_read_date';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'date' => 'int',
    ];
}

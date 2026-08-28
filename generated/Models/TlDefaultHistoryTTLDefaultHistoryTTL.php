<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for defaultHistoryTTL of DefaultHistoryTTL (crc32 43b46b20). */
final class TlDefaultHistoryTTLDefaultHistoryTTL extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_default_history_t_t_l_default_history_t_t_l';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'period' => 'int',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for stats.messageStats of stats.MessageStats (crc32 7fe91c14). */
final class TlStatsMessageStatsMessageStats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stats_message_stats_message_stats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'views_graph' => 'string',
        'reactions_by_emotion_graph' => 'string',
    ];
}

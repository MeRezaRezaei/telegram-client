<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param winners (table tl_message_media_message_media_giveaway_results__winners). */
final class TlMessageMediaMessageMediaGiveawayResultsWinners extends TlAnchorModel
{
    protected $table = 'tl_message_media_message_media_giveaway_results__winners';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}

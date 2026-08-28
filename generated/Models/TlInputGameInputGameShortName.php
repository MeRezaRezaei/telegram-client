<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputGameShortName of InputGame (crc32 c331e80a). */
final class TlInputGameInputGameShortName extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_game_input_game_short_name';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bot_id' => 'string',
        'short_name' => 'string',
    ];
}

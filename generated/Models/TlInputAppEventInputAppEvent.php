<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputAppEvent of InputAppEvent (crc32 1d1b1245). */
final class TlInputAppEventInputAppEvent extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_app_event_input_app_event';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'time' => 'float',
        'tl_type' => 'string',
        'peer' => 'int',
        'data' => 'string',
    ];
}

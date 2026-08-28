<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputCollectiblePhone of InputCollectible (crc32 a2e214a4). */
final class TlInputCollectibleInputCollectiblePhone extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_collectible_input_collectible_phone';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'phone' => 'string',
    ];
}

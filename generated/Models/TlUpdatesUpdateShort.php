<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateShort of Updates (crc32 78d4dec1). */
final class TlUpdatesUpdateShort extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_update_short';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'update' => 'string',
        'date' => 'int',
    ];
}

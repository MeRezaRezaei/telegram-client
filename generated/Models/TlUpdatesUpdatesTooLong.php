<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updatesTooLong of Updates (crc32 e317af7e). */
final class TlUpdatesUpdatesTooLong extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_updates_too_long';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for help.noAppUpdate of help.AppUpdate (crc32 c45a6536). */
final class TlHelpAppUpdateNoAppUpdate extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_app_update_no_app_update';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

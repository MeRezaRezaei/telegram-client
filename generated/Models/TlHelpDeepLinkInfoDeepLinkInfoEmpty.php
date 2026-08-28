<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for help.deepLinkInfoEmpty of help.DeepLinkInfo (crc32 66afa166). */
final class TlHelpDeepLinkInfoDeepLinkInfoEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_deep_link_info_deep_link_info_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for dialogFilterSuggested of DialogFilterSuggested (crc32 77744d4a). */
final class TlDialogFilterSuggestedDialogFilterSuggested extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_dialog_filter_suggested_dialog_filter_suggested';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'filter' => 'string',
        'description' => 'string',
    ];
}

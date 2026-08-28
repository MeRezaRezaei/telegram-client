<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDialogFiltersDialogFiltersFilters;

/** Constructor model for messages.dialogFilters of messages.DialogFilters (crc32 2ad93719). */
final class TlMessagesDialogFiltersDialogFilters extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_dialog_filters_dialog_filters';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tags_enabled' => 'bool',
    ];

    public function filters(): HasMany
    {
        return $this->tlChild(TlMessagesDialogFiltersDialogFiltersFilters::class);
    }
}

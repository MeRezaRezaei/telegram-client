<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for pendingSuggestion of PendingSuggestion (crc32 e7e82e12). */
final class TlPendingSuggestionPendingSuggestion extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_pending_suggestion_pending_suggestion';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'suggestion' => 'string',
        'title' => 'string',
        'description' => 'string',
        'url' => 'string',
    ];
}

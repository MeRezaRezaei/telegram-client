<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for stickers.suggestedShortName of stickers.SuggestedShortName (crc32 85fea03f). */
final class TlStickersSuggestedShortNameSuggestedShortName extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_stickers_suggested_short_name_suggested_short_name';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'short_name' => 'string',
    ];
}

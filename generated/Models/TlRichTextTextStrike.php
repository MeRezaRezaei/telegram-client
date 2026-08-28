<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for textStrike of RichText (crc32 9bf8bb95). */
final class TlRichTextTextStrike extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_rich_text_text_strike';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
    ];
}

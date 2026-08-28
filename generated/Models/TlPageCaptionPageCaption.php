<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for pageCaption of PageCaption (crc32 6f747657). */
final class TlPageCaptionPageCaption extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_caption_page_caption';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
        'credit' => 'string',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for pageBlockSubheader of PageBlock (crc32 f12bb6e1). */
final class TlPageBlockPageBlockSubheader extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_subheader';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
    ];
}

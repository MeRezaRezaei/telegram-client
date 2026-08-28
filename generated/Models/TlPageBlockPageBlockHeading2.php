<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for pageBlockHeading2 of PageBlock (crc32 096b2aec). */
final class TlPageBlockPageBlockHeading2 extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_heading2';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
    ];
}

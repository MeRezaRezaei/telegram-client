<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for pageBlockPreformatted of PageBlock (crc32 c070d93e). */
final class TlPageBlockPageBlockPreformatted extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_preformatted';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
        'language' => 'string',
    ];
}

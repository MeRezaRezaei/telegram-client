<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockCollageItems;

/** Constructor model for pageBlockCollage of PageBlock (crc32 65a0fa4d). */
final class TlPageBlockPageBlockCollage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_collage';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'caption' => 'string',
    ];

    public function items(): HasMany
    {
        return $this->tlChild(TlPageBlockPageBlockCollageItems::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockOrderedListItems;

/** Constructor model for pageBlockOrderedList of PageBlock (crc32 1fd6f6c1). */
final class TlPageBlockPageBlockOrderedList extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_ordered_list';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'reversed' => 'bool',
        'start' => 'int',
        'tl_type' => 'string',
    ];

    public function items(): HasMany
    {
        return $this->tlChild(TlPageBlockPageBlockOrderedListItems::class);
    }
}

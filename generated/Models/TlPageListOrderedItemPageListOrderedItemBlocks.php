<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageListOrderedItemPageListOrderedItemBlocksBlocks;

/** Constructor model for pageListOrderedItemBlocks of PageListOrderedItem (crc32 8ff2d5f0). */
final class TlPageListOrderedItemPageListOrderedItemBlocks extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_list_ordered_item_page_list_ordered_item_blocks';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'checkbox' => 'bool',
        'checked' => 'bool',
        'num' => 'string',
        'tl_value' => 'int',
        'tl_type' => 'string',
    ];

    public function blocks(): HasMany
    {
        return $this->tlChild(TlPageListOrderedItemPageListOrderedItemBlocksBlocks::class);
    }
}

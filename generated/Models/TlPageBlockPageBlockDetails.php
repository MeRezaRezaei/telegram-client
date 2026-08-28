<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockDetailsBlocks;

/** Constructor model for pageBlockDetails of PageBlock (crc32 76768bed). */
final class TlPageBlockPageBlockDetails extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_details';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'open' => 'bool',
        'title' => 'string',
    ];

    public function blocks(): HasMany
    {
        return $this->tlChild(TlPageBlockPageBlockDetailsBlocks::class);
    }
}

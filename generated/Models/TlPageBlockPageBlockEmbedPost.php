<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockEmbedPostBlocks;

/** Constructor model for pageBlockEmbedPost of PageBlock (crc32 f259a80b). */
final class TlPageBlockPageBlockEmbedPost extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_page_block_page_block_embed_post';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'webpage_id' => 'int',
        'author_photo_id' => 'int',
        'author' => 'string',
        'date' => 'int',
        'caption' => 'string',
    ];

    public function blocks(): HasMany
    {
        return $this->tlChild(TlPageBlockPageBlockEmbedPostBlocks::class);
    }
}

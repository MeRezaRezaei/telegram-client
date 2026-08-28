<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichMessageRichMessageBlocks;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichMessageRichMessagePhotos;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichMessageRichMessageDocuments;

/** Constructor model for richMessage of RichMessage (crc32 baf39d8b). */
final class TlRichMessageRichMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_rich_message_rich_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'rtl' => 'bool',
        'part' => 'bool',
    ];

    public function blocks(): HasMany
    {
        return $this->tlChild(TlRichMessageRichMessageBlocks::class);
    }
    public function photos(): HasMany
    {
        return $this->tlChild(TlRichMessageRichMessagePhotos::class);
    }
    public function documents(): HasMany
    {
        return $this->tlChild(TlRichMessageRichMessageDocuments::class);
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessageBlocks;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessagePhotos;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessageDocuments;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichMessageInputRichMessageUsers;

/** Constructor model for inputRichMessage of InputRichMessage (crc32 e4c449fc). */
final class TlInputRichMessageInputRichMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_rich_message_input_rich_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'rtl' => 'bool',
        'noautolink' => 'bool',
    ];

    public function blocks(): HasMany
    {
        return $this->tlChild(TlInputRichMessageInputRichMessageBlocks::class);
    }
    public function photos(): HasMany
    {
        return $this->tlChild(TlInputRichMessageInputRichMessagePhotos::class);
    }
    public function documents(): HasMany
    {
        return $this->tlChild(TlInputRichMessageInputRichMessageDocuments::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlInputRichMessageInputRichMessageUsers::class);
    }
}

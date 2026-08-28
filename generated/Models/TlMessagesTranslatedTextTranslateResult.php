<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesTranslatedTextTranslateResultResult;

/** Constructor model for messages.translateResult of messages.TranslatedText (crc32 33db32f8). */
final class TlMessagesTranslatedTextTranslateResult extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_translated_text_translate_result';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function result(): HasMany
    {
        return $this->tlChild(TlMessagesTranslatedTextTranslateResultResult::class);
    }
}

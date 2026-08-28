<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebDocumentWebDocumentNoProxyAttributes;

/** Constructor model for webDocumentNoProxy of WebDocument (crc32 f9c8bcc6). */
final class TlWebDocumentWebDocumentNoProxy extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_web_document_web_document_no_proxy';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'tl_size' => 'int',
        'mime_type' => 'string',
    ];

    public function attributes(): HasMany
    {
        return $this->tlChild(TlWebDocumentWebDocumentNoProxyAttributes::class);
    }
}

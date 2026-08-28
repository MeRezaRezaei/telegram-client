<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueErrorSecureValueErrorTranslationFilesFile_hash;

/** Constructor model for secureValueErrorTranslationFiles of SecureValueError (crc32 34636dd8). */
final class TlSecureValueErrorSecureValueErrorTranslationFiles extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_value_error_secure_value_error_translation_files';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_type' => 'string',
        'text' => 'string',
    ];

    public function fileHash(): HasMany
    {
        return $this->tlChild(TlSecureValueErrorSecureValueErrorTranslationFilesFile_hash::class);
    }
}

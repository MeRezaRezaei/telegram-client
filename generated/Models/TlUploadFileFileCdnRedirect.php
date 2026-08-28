<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUploadFileFileCdnRedirectFile_hashes;

/** Constructor model for upload.fileCdnRedirect of upload.File (crc32 f18cda44). */
final class TlUploadFileFileCdnRedirect extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_upload_file_file_cdn_redirect';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'dc_id' => 'int',
        'file_token' => 'string',
        'encryption_key' => 'string',
        'encryption_iv' => 'string',
    ];

    public function fileHashes(): HasMany
    {
        return $this->tlChild(TlUploadFileFileCdnRedirectFile_hashes::class);
    }
}

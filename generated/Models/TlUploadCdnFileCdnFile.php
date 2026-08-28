<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for upload.cdnFile of upload.CdnFile (crc32 a99fca4f). */
final class TlUploadCdnFileCdnFile extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_upload_cdn_file_cdn_file';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bytes' => 'string',
    ];
}

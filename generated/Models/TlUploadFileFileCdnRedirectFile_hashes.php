<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param file_hashes (table tl_upload_file_file_cdn_redirect__file_hashes). */
final class TlUploadFileFileCdnRedirectFile_hashes extends TlAnchorModel
{
    protected $table = 'tl_upload_file_file_cdn_redirect__file_hashes';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

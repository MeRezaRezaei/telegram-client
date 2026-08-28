<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for storage.fileGif of storage.FileType (crc32 cae1aadf). */
final class TlStorageFileTypeFileGif extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_storage_file_type_file_gif';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputEncryptedFileBigUploaded of InputEncryptedFile (crc32 2dc173c8). */
final class TlInputEncryptedFileInputEncryptedFileBigUploaded extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_encrypted_file_input_encrypted_file_big_uploaded';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
        'parts' => 'int',
        'key_fingerprint' => 'int',
    ];
}

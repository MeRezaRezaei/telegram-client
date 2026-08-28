<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for encryptedFileEmpty of EncryptedFile (crc32 c21f497e). */
final class TlEncryptedFileEncryptedFileEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_encrypted_file_encrypted_file_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}

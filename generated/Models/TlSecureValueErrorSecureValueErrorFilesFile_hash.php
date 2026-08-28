<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param file_hash (table tl_secure_value_error_secure_value_error_files__file_hash). */
final class TlSecureValueErrorSecureValueErrorFilesFile_hash extends TlAnchorModel
{
    protected $table = 'tl_secure_value_error_secure_value_error_files__file_hash';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'string',
    ];
}

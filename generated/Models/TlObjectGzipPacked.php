<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for gzip_packed of Object (crc32 3072cfa1). */
final class TlObjectGzipPacked extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_object_gzip_packed';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'packed_data' => 'string',
    ];
}

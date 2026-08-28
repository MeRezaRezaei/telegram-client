<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for fileLocation of FileLocation (crc32 53d69076). */
final class TlFileLocationFileLocation extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_file_location_file_location';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'dc_id' => 'int',
        'volume_id' => 'int',
        'local_id' => 'int',
        'secret' => 'int',
    ];
}

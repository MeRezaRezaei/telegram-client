<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputWebFileLocation of InputWebFileLocation (crc32 c239d686). */
final class TlInputWebFileLocationInputWebFileLocation extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_web_file_location_input_web_file_location';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'url' => 'string',
        'access_hash' => 'int',
    ];
}

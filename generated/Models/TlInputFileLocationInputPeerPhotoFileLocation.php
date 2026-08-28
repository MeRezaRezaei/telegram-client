<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPeerPhotoFileLocation of InputFileLocation (crc32 37257e99). */
final class TlInputFileLocationInputPeerPhotoFileLocation extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_file_location_input_peer_photo_file_location';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'big' => 'bool',
        'peer' => 'string',
        'photo_id' => 'int',
    ];
}

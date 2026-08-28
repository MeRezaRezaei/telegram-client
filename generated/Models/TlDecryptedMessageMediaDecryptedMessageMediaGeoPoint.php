<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for decryptedMessageMediaGeoPoint of DecryptedMessageMedia (crc32 35480a59). */
final class TlDecryptedMessageMediaDecryptedMessageMediaGeoPoint extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_decrypted_message_media_decrypted_message__a644abd2ed29';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'lat' => 'float',
        'tl_long' => 'float',
    ];
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for decryptedMessageMediaAudio of DecryptedMessageMedia (crc32 57e0a9cb). */
final class TlDecryptedMessageMediaDecryptedMessageMediaAudio extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_decrypted_message_media_decrypted_message_media_audio';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'duration' => 'int',
        'mime_type' => 'string',
        'tl_size' => 'int',
        'tl_key' => 'string',
        'iv' => 'string',
    ];
}

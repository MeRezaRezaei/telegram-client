<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputEncryptedChat of InputEncryptedChat (crc32 f141b5e1). */
final class TlInputEncryptedChatInputEncryptedChat extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_encrypted_chat_input_encrypted_chat';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'chat_id' => 'int',
        'access_hash' => 'int',
    ];
}

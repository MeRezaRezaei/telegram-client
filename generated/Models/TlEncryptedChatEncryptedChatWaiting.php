<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for encryptedChatWaiting of EncryptedChat (crc32 66b25953). */
final class TlEncryptedChatEncryptedChatWaiting extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_encrypted_chat_encrypted_chat_waiting';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
        'access_hash' => 'int',
        'date' => 'int',
        'admin_id' => 'int',
        'participant_id' => 'int',
    ];
}

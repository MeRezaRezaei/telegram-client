<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for decryptedMessageActionSetMessageTTL of DecryptedMessageAction (crc32 a1733aec). */
final class TlDecryptedMessageActionDecryptedMessageActionSetMessageTTL extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_decrypted_message_action_decrypted_message_69df6d9bcc2a';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'ttl_seconds' => 'int',
    ];
}

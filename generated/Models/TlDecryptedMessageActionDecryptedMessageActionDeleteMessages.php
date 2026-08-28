<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessage1beea02c6150Random_ids;

/** Constructor model for decryptedMessageActionDeleteMessages of DecryptedMessageAction (crc32 65614304). */
final class TlDecryptedMessageActionDecryptedMessageActionDeleteMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_decrypted_message_action_decrypted_message_1beea02c6150';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function randomIds(): HasMany
    {
        return $this->tlChild(TlDecryptedMessageActionDecryptedMessage1beea02c6150Random_ids::class);
    }
}

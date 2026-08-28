<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessage503f68851191Random_ids;

/** Constructor model for decryptedMessageActionScreenshotMessages of DecryptedMessageAction (crc32 8ac1f475). */
final class TlDecryptedMessageActionDecryptedMessageActionScreenshotMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_decrypted_message_action_decrypted_message_503f68851191';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function randomIds(): HasMany
    {
        return $this->tlChild(TlDecryptedMessageActionDecryptedMessage503f68851191Random_ids::class);
    }
}

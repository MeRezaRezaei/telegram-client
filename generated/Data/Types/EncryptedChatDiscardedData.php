<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for encryptedChatDiscarded of EncryptedChat.
 */
final class EncryptedChatDiscardedData extends TlEncryptedChatAbstractData
{
    public function __construct(
    public int $flags,
    public bool $historyDeleted,
    public int $id,
    ) {
    }
}

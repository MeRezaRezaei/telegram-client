<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.sentEncryptedFile of messages.SentEncryptedMessage.
 */
final class TlMessagesSentEncryptedFileData extends TlMessagesSentEncryptedMessageAbstractData
{
    public function __construct(
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlEncryptedFileAbstractData $file,
    ) {
    }
}

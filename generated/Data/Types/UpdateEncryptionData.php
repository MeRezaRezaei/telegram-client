<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateEncryption of Update.
 */
final class UpdateEncryptionData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlEncryptedChatAbstractData $chat,
    public int $date,
    ) {
    }
}

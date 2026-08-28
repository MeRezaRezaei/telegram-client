<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateEncryptedMessagesRead of Update.
 */
final class UpdateEncryptedMessagesReadData extends TlUpdateAbstractData
{
    public function __construct(
    public int $chatId,
    public int $maxDate,
    public int $date,
    ) {
    }
}

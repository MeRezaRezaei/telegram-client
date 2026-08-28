<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.messageEditData of messages.MessageEditData.
 */
final class TlMessagesMessageEditDataData extends TlMessagesMessageEditDataAbstractData
{
    public function __construct(
    public int $flags,
    public bool $caption,
    ) {
    }
}

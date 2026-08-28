<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateGroupCallMessage of Update.
 */
final class UpdateGroupCallMessageData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGroupCallAbstractData $call,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGroupCallMessageAbstractData $message,
    ) {
    }
}

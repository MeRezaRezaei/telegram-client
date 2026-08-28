<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateBotNewBusinessMessage of Update.
 */
final class UpdateBotNewBusinessMessageData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public string $connectionId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageAbstractData $message,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageAbstractData $replyToMessage,
    public int $qts,
    ) {
    }
}

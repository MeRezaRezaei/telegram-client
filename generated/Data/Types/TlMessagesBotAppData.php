<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.botApp of messages.BotApp.
 */
final class TlMessagesBotAppData extends TlMessagesBotAppAbstractData
{
    public function __construct(
    public int $flags,
    public bool $inactive,
    public bool $requestWriteAccess,
    public bool $hasSettings,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotAppAbstractData $app,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botCommand of BotCommand.
 */
final class BotCommandData extends TlBotCommandAbstractData
{
    public function __construct(
    public string $command,
    public string $description,
    ) {
    }
}

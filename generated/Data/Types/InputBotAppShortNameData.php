<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotAppShortName of InputBotApp.
 */
final class InputBotAppShortNameData extends TlInputBotAppAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputUserAbstractData $botId,
    public string $shortName,
    ) {
    }
}

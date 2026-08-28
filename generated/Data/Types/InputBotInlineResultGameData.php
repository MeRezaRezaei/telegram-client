<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineResultGame of InputBotInlineResult.
 */
final class InputBotInlineResultGameData extends TlInputBotInlineResultAbstractData
{
    public function __construct(
    public string $id,
    public string $shortName,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputBotInlineMessageAbstractData $sendMessage,
    ) {
    }
}

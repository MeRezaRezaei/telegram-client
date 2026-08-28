<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineMessageID of InputBotInlineMessageID.
 */
final class InputBotInlineMessageIDData extends TlInputBotInlineMessageIDAbstractData
{
    public function __construct(
    public int $dcId,
    public int $id,
    public int $accessHash,
    ) {
    }
}

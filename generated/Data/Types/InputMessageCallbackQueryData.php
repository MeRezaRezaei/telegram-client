<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMessageCallbackQuery of InputMessage.
 */
final class InputMessageCallbackQueryData extends TlInputMessageAbstractData
{
    public function __construct(
    public int $id,
    public int $queryId,
    ) {
    }
}

<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputAiComposeToneID of InputAiComposeTone.
 */
final class InputAiComposeToneIDData extends TlInputAiComposeToneAbstractData
{
    public function __construct(
    public int $id,
    public int $accessHash,
    ) {
    }
}

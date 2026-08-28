<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStickerSetShortName of InputStickerSet.
 */
final class InputStickerSetShortNameData extends TlInputStickerSetAbstractData
{
    public function __construct(
    public string $shortName,
    ) {
    }
}

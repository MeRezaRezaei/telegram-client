<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputStickerSetItem of InputStickerSetItem.
 */
final class InputStickerSetItemData extends TlInputStickerSetItemAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputDocumentAbstractData $document,
    public string $emoji,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMaskCoordsAbstractData $maskCoords,
    public string $keywords,
    ) {
    }
}

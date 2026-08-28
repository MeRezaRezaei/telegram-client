<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for documentAttributeSticker of DocumentAttribute.
 */
final class DocumentAttributeStickerData extends TlDocumentAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $mask,
    public string $alt,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputStickerSetAbstractData $stickerset,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMaskCoordsAbstractData $maskCoords,
    ) {
    }
}

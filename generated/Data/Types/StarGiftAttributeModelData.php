<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAttributeModel of StarGiftAttribute.
 */
final class StarGiftAttributeModelData extends TlStarGiftAttributeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $crafted,
    public string $name,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAttributeRarityAbstractData $rarity,
    ) {
    }
}

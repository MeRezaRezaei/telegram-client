<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAttributePattern of StarGiftAttribute.
 */
final class StarGiftAttributePatternData extends TlStarGiftAttributeAbstractData
{
    public function __construct(
    public string $name,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $document,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAttributeRarityAbstractData $rarity,
    ) {
    }
}

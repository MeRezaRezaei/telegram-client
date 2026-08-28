<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftCollection of StarGiftCollection.
 */
final class StarGiftCollectionData extends TlStarGiftCollectionAbstractData
{
    public function __construct(
    public int $flags,
    public int $collectionId,
    public string $title,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $icon,
    public int $giftsCount,
    public int $hash,
    ) {
    }
}

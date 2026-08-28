<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stickerSetFullCovered of StickerSetCovered.
 */
final class StickerSetFullCoveredData extends TlStickerSetCoveredAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStickerSetAbstractData $set,
    public array $packs,
    public array $keywords,
    public array $documents,
    ) {
    }
}

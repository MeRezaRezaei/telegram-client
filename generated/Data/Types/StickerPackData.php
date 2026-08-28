<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stickerPack of StickerPack.
 */
final class StickerPackData extends TlStickerPackAbstractData
{
    public function __construct(
    public string $emoticon,
    public array $documents,
    ) {
    }
}

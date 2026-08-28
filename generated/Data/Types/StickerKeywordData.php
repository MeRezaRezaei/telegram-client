<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stickerKeyword of StickerKeyword.
 */
final class StickerKeywordData extends TlStickerKeywordAbstractData
{
    public function __construct(
    public int $documentId,
    public array $keyword,
    ) {
    }
}

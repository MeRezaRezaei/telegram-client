<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.stickerSet of messages.StickerSet.
 */
final class TlMessagesStickerSetData extends TlMessagesStickerSetAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStickerSetAbstractData $set,
    public array $packs,
    public array $keywords,
    public array $documents,
    ) {
    }
}

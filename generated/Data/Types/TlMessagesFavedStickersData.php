<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.favedStickers of messages.FavedStickers.
 */
final class TlMessagesFavedStickersData extends TlMessagesFavedStickersAbstractData
{
    public function __construct(
    public int $hash,
    public array $packs,
    public array $stickers,
    ) {
    }
}

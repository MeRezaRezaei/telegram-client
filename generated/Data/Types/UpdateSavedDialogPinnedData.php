<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateSavedDialogPinned of Update.
 */
final class UpdateSavedDialogPinnedData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pinned,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogPeerAbstractData $peer,
    ) {
    }
}

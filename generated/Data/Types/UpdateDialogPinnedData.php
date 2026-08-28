<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateDialogPinned of Update.
 */
final class UpdateDialogPinnedData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pinned,
    public int $folderId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogPeerAbstractData $peer,
    ) {
    }
}

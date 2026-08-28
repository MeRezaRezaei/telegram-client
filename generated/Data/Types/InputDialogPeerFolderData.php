<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputDialogPeerFolder of InputDialogPeer.
 */
final class InputDialogPeerFolderData extends TlInputDialogPeerAbstractData
{
    public function __construct(
    public int $folderId,
    ) {
    }
}

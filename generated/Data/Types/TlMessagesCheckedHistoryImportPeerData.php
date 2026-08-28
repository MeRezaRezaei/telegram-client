<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.checkedHistoryImportPeer of messages.CheckedHistoryImportPeer.
 */
final class TlMessagesCheckedHistoryImportPeerData extends TlMessagesCheckedHistoryImportPeerAbstractData
{
    public function __construct(
    public string $confirmText,
    ) {
    }
}

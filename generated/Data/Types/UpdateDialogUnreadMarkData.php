<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateDialogUnreadMark of Update.
 */
final class UpdateDialogUnreadMarkData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $unread,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogPeerAbstractData $peer,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedPeerId,
    ) {
    }
}
